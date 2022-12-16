<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class Collection extends Model
{
    /**
     * @example album
     *
     * @var string
     */
    public $collectionType;

    /**
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example 1668600147617
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $level;

    /**
     * @example collectionName
     *
     * @var string
     */
    public $name;

    /**
     * @example 1234444
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example owner
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example album.12334
     *
     * @var string
     */
    public $qualifiedName;

    /**
     * @example 1668600148617
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'collectionType' => 'CollectionType',
        'comment'        => 'Comment',
        'createTime'     => 'CreateTime',
        'level'          => 'Level',
        'name'           => 'Name',
        'ownerId'        => 'OwnerId',
        'ownerName'      => 'OwnerName',
        'qualifiedName'  => 'QualifiedName',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionType) {
            $res['CollectionType'] = $this->collectionType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Collection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectionType'])) {
            $model->collectionType = $map['CollectionType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
