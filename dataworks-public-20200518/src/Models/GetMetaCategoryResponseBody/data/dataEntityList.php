<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaCategoryResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @example 133
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example category 1
     *
     * @var string
     */
    public $comment;

    /**
     * @example 1541576644000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $depth;

    /**
     * @example 12345
     *
     * @var string
     */
    public $lastOperatorId;

    /**
     * @example 1541576644000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example category 1
     *
     * @var string
     */
    public $name;

    /**
     * @example 123
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example 12
     *
     * @var int
     */
    public $parentCategoryId;
    protected $_name = [
        'categoryId'       => 'CategoryId',
        'comment'          => 'Comment',
        'createTime'       => 'CreateTime',
        'depth'            => 'Depth',
        'lastOperatorId'   => 'LastOperatorId',
        'modifiedTime'     => 'ModifiedTime',
        'name'             => 'Name',
        'ownerId'          => 'OwnerId',
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }
        if (null !== $this->lastOperatorId) {
            $res['LastOperatorId'] = $this->lastOperatorId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }
        if (isset($map['LastOperatorId'])) {
            $model->lastOperatorId = $map['LastOperatorId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }

        return $model;
    }
}
