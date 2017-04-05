//PHP的测试脚本
--TEST-- //指明测试名称
Trivial "Hello World" test
--FILE-- //测试文件内容
<?php echo "Hello World"?>
--EXPECT-- //期望输出的结果
Hello World
