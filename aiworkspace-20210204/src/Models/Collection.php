<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class Collection extends Model
{
    /**
     * @example AI4D
     *
     * @var string
     */
    public $collectionName;

    /**
     * @example 2021-01-21T17:12:35Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-21T17:12:35Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 155770209******
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example 155770209******
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'collectionName'  => 'CollectionName',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'ownerId'         => 'OwnerId',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionName) {
            $res['CollectionName'] = $this->collectionName;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CollectionName'])) {
            $model->collectionName = $map['CollectionName'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
