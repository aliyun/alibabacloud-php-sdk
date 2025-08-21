<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class categories extends Model
{
    /**
     * @var string
     */
    public $abilityType;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parentCategoryId;
    protected $_name = [
        'abilityType' => 'AbilityType',
        'categoryId' => 'CategoryId',
        'name' => 'Name',
        'parentCategoryId' => 'ParentCategoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abilityType) {
            $res['AbilityType'] = $this->abilityType;
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
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
        if (isset($map['AbilityType'])) {
            $model->abilityType = $map['AbilityType'];
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }

        return $model;
    }
}
