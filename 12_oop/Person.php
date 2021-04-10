<?php


class Person {
    public string $fname;
    public string $lname;
    private int $age;
    public static int $counter = 0;

    public function __construct($fname, $lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        self::$counter++;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public static function getCounter(): int
    {
        return self::$counter;
    }
}