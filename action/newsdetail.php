<?php
$data = array(
	"id" => 1,
	"title" => "内部通知",
	"writer" => "管理员",
	"date" => 1455808822088,
	"content" => "公司内部最新消息"
);
$result = array(
	"errno" => 0,
	"data" => $data
);
echo json_encode($result);