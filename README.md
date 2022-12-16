# Supermarket_project_with_symfony_and_Easyasmin
A supermarket project. The application allows to add products, to categorize them and offers a lot of adminsitrator action like delete, create or modify. 
Functional project but not finished

REPORT 👀

I managed to do almost everything that was asked in the instructions.
Adding products is possible and I also added a category option for each product. once you add a product, 
a "Products" card is automatically created with the information entered.

⚔  admin credentials are: - supermarket@supermarket.com
                       - supermarket

Existing: I created maps in advance so that the homepage is not empty.

defects: although it is possible to add images in the administrators interface, they do not appear on the home page in their official cards.
This is due to problems I encountered with vichUploader , setUploader and imagefield .
when you try to modify an existing product, the image linked to it appears however and once the modification is validated, it does not succeed.
This is always due to vichUploader , setUploader and imagefield. I was unable to resolve this anomaly. So for the viewing I commented the script allowing to take the
image from the bdd and put it in the cards. 
Right next to the comment I inserted an image manually so that the div of the image is not empty.
