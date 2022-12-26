<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListCategoryResponseBody;

use AlibabaCloud\Tea\Model;

class categories extends Model
{
    /**
     * @example 231001028593
     *
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example -1
     *
     * @var int
     */
    public $parentCategoryId;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'categoryId'       => 'CategoryId',
        'name'             => 'Name',
        'parentCategoryId' => 'ParentCategoryId',
        'status'           => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
