/inner join/

SELECT orders.orderid, customer.customername, orders.orderdate
FROM orders
INNER JOIN customer ON orders.customerid=customer.customerid
order by orderdate desc;


/inner join on three table/

SELECT product.productid, orders.orderid,customer.customername,product.productname
FROM ((product
INNER JOIN customer ON product.customerid = customer.customerid)
INNER JOIN orders ON product.productid = orders.productid);


SELECT product.productid, orders.orderid,customer.customername,product.productname
FROM ((product
INNER JOIN customer ON product.customerid = customer.customerid)
INNER JOIN orders ON product.productid = orders.productid)
order by customername desc;


/left join/

select customer.customername,orders.orderid
from customer
left join orders on customer.customerid=orders.customerid;



/right join/

select orders.orderid,orders.customerid,customer.customername
from orders
right join customer on orders.customerid=customer.customerid;


SELECT c.customerid, customername, orderdate, orderdate
FROM customer c
RIGHT JOIN orders USING (customerid);



/full outer join/

select customer.customername,orders.orderid
from customer
full outer join orders on customer.customerid=orders.customerid;

/Self Join/

SELECT A.customername AS customername1, B.customername AS customername2, A.City
FROM customer A, customer B
WHERE A.customerid <> B.customerid
AND A.city = B.city; // A.cutomername=B.customername;


/IN operator/

SELECT * FROM reg
WHERE city IN (SELECT city FROM userinfo);



/Between operator/

SELECT * FROM reg
WHERE age BETWEEN 20 AND 30;


