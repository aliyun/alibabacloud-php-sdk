<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeBotResponseBody;

use AlibabaCloud\Tea\Model;

class categories extends Model
{
    /**
     * @example 2100073048
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example -1
     *
     * @var int
     */
    public $parentCategoryId;
    protected $_name = [
        'categoryId'       => 'CategoryId',
        'name'             => 'Name',
        'parentCategoryId' => 'ParentCategoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return categories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
