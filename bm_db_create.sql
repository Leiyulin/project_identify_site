use auth;
create table bookmark(
	user varchar(16) not null,
	bm_url	varchar(255) not null,
	index(user),
	index(bm_url),
	primary key(user,bm_url)
);
grant select,insert,update,delete on bookmark.* to lyldb@localhost identified by 'lyl907670433';