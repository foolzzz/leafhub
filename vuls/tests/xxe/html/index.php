<?php
libxml_disable_entity_loader (false);

$post_data = file_get_contents("php://input", 'r');

$xml_cnt = $post_data;

$xml = simplexml_load_string($xml_cnt, 'SimpleXMLElement', LIBXML_NOENT);

echo "===============================\n";
echo "post content:\n";
echo $xml_cnt."\n";
echo "===============================\n";
print_r($xml);
?>
