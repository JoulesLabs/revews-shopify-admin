# Create second_db database if it doesn't exist
CREATE DATABASE IF NOT EXISTS revews_shopify_admin;
# Grant all privilidges on second_db to org_user
GRANT ALL ON root.* TO 'root'@'localhost';