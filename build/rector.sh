set -e
rm -rf Aliyun && git checkout origin/src Aliyun
rm -rf sample && git checkout origin/src sample
vendor/bin/rector process --config=build/rector-split-class.php --clear-cache
vendor/bin/rector process --config=build/rector.php --clear-cache
vendor/bin/rector process --config=build/rector-filename.php --clear-cache
vendor/bin/rector process --config=build/rector-namespace.php --clear-cache
vendor/bin/rector process --config=build/rector-filename.php --clear-cache
vendor/bin/rector process --config=build/rector-psr4.php --clear-cache
vendor/bin/rector process --config=build/rector-filename.php --clear-cache
