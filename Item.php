// Class Exc 3 - created class named item; stores data for second group project
class Item
{
        public Name = '';
        public Description = '';
        public Price = 0;
        public function __construct($name,$description,$price)
        {
                $this->name = $name;
                $this->description = $description;
                $this->price = $price;
        }
}

