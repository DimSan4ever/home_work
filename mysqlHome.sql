
#клиенты что ничего не заказывали

select user.id,user.login 
from user left join `order`
on user.id=`order`.user_id
where `order`.user_id is null;

#имя и айди клиентов которые потратил больше всех

select user.id,user.login,sum(`order`.amount) suma
from user, `order`
where user.id=`order`.user_id
group by `order`.user_id
having suma = 
(select sum(`order`.amount) 
from `order` 
group by `order`.user_id 
having sum(`order`.amount)
order by `order`.amount desc 
limit 1);

#книги 1 и 3

select library.autor_id,GROUP_CONCAT(library.book_id) Books
from library
group by library.autor_id
having Books = "1,3";
