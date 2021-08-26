#./build.sh
#gulp prod

# Inline CSS
CSS=$( cat www/src/css/main.css )
sed -i -e 's|<link href="src/css/main.css" rel="stylesheet" inline>|<style>'"${CSS}"'</style>|g' www/index.html

# rsync -auv www/ felixeve:/var/www/felixeve.co.uk/