CSS=$( cat www/src/css/main.css )
sed -i -e 's|<link href="src/css/main.css" rel="stylesheet" inline>|<style>'"${CSS}"'</style>|g' www/index.html