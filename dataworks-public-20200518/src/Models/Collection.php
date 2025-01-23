<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class Collection extends Model
{
    /**
     * @var string
     */
    public $collectionType;
    /**
     * @var string
     */
    public $comment;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var int
     */
    public $level;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $ownerId;
    /**
     * @var string
     */
    public $ownerName;
    /**
     * @var string
     */
    public $qualifiedName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
