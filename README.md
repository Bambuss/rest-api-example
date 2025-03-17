# REST-API example

## Route list

### Company

~~~
company.index   [GET]       https://rest-api-example.test/api/company 
company.store   [POST]      https://rest-api-example.test/api/company 
company.show    [GET]       https://rest-api-example.test/api/company/{company_id}
company.update  [PUT|PATCH] https://rest-api-example.test/api/company/{company_id}
company.destroy [DELETE]    https://rest-api-example.test/api/company/{company_id} 
~~~

### Employee

~~~
employee.index   [GET]       https://rest-api-example.test/api/employee 
employee.store   [POST]      https://rest-api-example.test/api/employee 
employee.show    [GET]       https://rest-api-example.test/api/employee/{employee_id}
employee.update  [PUT|PATCH] https://rest-api-example.test/api/employee/{employee_id}
employee.destroy [DELETE]    https://rest-api-example.test/api/employee/{employee_id} 
~~~

## Data required

This data is needed to store or update models.

### Company

~~~ json
{
    "name": {company name},
    "nip": {company nip},
    "adress": {company adress},
    "city": {company city},
    "postal_code": {company postal code},
}
~~~

### Employee

~~~ json
{
    "first_name": {employee first name},
    "last_name": {employee last name},
    "email": {employee email},
    "phone": {employee phone number (optional)},
    "company_id": {id of company which an employee needs to be assigned to}
}
~~~
