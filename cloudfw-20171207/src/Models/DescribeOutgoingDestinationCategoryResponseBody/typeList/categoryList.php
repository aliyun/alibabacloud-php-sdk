<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingDestinationCategoryResponseBody\typeList;

use AlibabaCloud\Dara\Model;

class categoryList extends Model
{
    /**
     * @var string
     */
    public $categoryDescribe;

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
    public $classId;
    protected $_name = [
        'categoryDescribe' => 'CategoryDescribe',
        'categoryId' => 'CategoryId',
        'categoryName' => 'CategoryName',
        'classId' => 'ClassId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryDescribe) {
            $res['CategoryDescribe'] = $this->categoryDescribe;
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->classId) {
            $res['ClassId'] = $this->classId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryDescribe'])) {
            $model->categoryDescribe = $map['CategoryDescribe'];
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['ClassId'])) {
            $model->classId = $map['ClassId'];
        }

        return $model;
    }
}
