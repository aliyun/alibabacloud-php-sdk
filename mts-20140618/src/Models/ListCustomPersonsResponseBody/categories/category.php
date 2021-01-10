<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListCustomPersonsResponseBody\categories\category\persons;
use AlibabaCloud\Tea\Model;

class category extends Model
{
    /**
     * @var persons
     */
    public $persons;

    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $categoryDescription;
    protected $_name = [
        'persons'             => 'Persons',
        'categoryId'          => 'CategoryId',
        'categoryName'        => 'CategoryName',
        'categoryDescription' => 'CategoryDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->persons) {
            $res['Persons'] = null !== $this->persons ? $this->persons->toMap() : null;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->categoryDescription) {
            $res['CategoryDescription'] = $this->categoryDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return category
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Persons'])) {
            $model->persons = persons::fromMap($map['Persons']);
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['CategoryDescription'])) {
            $model->categoryDescription = $map['CategoryDescription'];
        }

        return $model;
    }
}
