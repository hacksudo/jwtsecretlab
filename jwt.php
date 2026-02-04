<?php
$SECRET = "secret123"; // weak but real

function b64url_encode($data){
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function b64url_decode($data){
    return base64_decode(strtr($data, '-_', '+/'));
}

function create_jwt($user,$role){
    global $SECRET;

    $header = b64url_encode(json_encode([
        "alg"=>"HS256",
        "typ"=>"JWT"
    ]));

    $payload = b64url_encode(json_encode([
        "user"=>$user,
        "role"=>$role
    ]));

    $signature = b64url_encode(
        hash_hmac("sha256", "$header.$payload", $SECRET, true)
    );

    return "$header.$payload.$signature";
}

function verify_jwt($jwt){
    global $SECRET;
    $parts = explode('.', $jwt);
    if(count($parts) !== 3) return false;

    $checkSig = b64url_encode(
        hash_hmac("sha256", "$parts[0].$parts[1]", $SECRET, true)
    );

    return hash_equals($checkSig, $parts[2]);
}

function get_payload($jwt){
    $parts = explode('.', $jwt);
    return json_decode(b64url_decode($parts[1]), true);
}

function is_admin($jwt){
    if(!verify_jwt($jwt)) return false;

    $data = get_payload($jwt);
    return ($data["role"] === "admin");
}
?>
