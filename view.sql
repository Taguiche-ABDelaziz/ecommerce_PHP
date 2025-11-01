CREATE  VIEW itemsview AS
SELECT items.* , categories.* FROM  items
INNER JOIN categories ON items.items_categories = categories.categores_id;


/*CREATE OR REPLACE VIEW myfavorite AS
SELECT favorite.* , items.* , users.users_id FROM favorite 
INNER JOIN users on users.users_id =favorite.favorite_usersid 
INNER JOIN items on items.items_id =favorite.favorite_itemsid*/