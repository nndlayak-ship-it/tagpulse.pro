<?php

header("Content-Type: application/json");

if (!isset($_POST['keyword']) || empty($_POST['keyword'])) {
    echo json_encode(["error" => "No keyword provided"]);
    exit;
}

$keyword = strtolower(trim($_POST['keyword']));

$sample_tags = [
    "travel" => ["#travel", "#wanderlust", "#travelgram", "#adventure", "#trip", "#travelblogger"],
    "food" => ["#food", "#foodie", "#yummy", "#delicious", "#foodlover", "#instafood"],
    "fitness" => ["#fitness", "#workout", "#gym", "#fitlife", "#healthylifestyle", "#exercise"],
    "love" => ["#love", "#couple", "#romance", "#relationship", "#lovely", "#heart"],
];

$response = [];

if (array_key_exists($keyword, $sample_tags)) {
    $response = $sample_tags[$keyword];
} else {
    // Default simple generated tags
    $response = [
        "#".$keyword,
        "#".$keyword."love",
        "#".$keyword."life",
        "#".$keyword."daily",
        "#".$keyword."vibes",
        "#".$keyword."2025"
    ];
}

echo json_encode($response);