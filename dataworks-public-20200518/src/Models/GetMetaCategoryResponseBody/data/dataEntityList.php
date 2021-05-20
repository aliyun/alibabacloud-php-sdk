<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaCategoryResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @var int
     */
    public $depth;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $lastOperatorId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parentCategoryId;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'depth'            => 'Depth',
        'comment'          => 'Comment',
        'modifiedTime'     => 'ModifiedTime',
        'createTime'       => 'CreateTime',
        'categoryId'       => 'CategoryId',
        'lastOperatorId'   => 'LastOperatorId',
        'name'             => 'Name',
        'parentCategoryId' => 'ParentCategoryId',
        'ownerId'          => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->lastOperatorId) {
            $res['LastOperatorId'] = $this->lastOperatorId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['LastOperatorId'])) {
            $model->lastOperatorId = $map['LastOperatorId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
