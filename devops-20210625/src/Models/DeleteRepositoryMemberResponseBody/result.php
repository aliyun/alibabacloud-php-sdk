<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\DeleteRepositoryMemberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @example 2022-03-12 12:00:00
     *
     * @var string
     */
    public $createAt;

    /**
     * @example 5f969843cd2214ba0e24327d
     *
     * @var string
     */
    public $externUid;

    /**
     * @example 30815
     *
     * @var int
     */
    public $id;

    /**
     * @example 2080398
     *
     * @var int
     */
    public $sourceId;

    /**
     * @example Project
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example 2022-03-12 12:00:00
     *
     * @var string
     */
    public $updateAt;

    /**
     * @example 19280
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'accessLevel' => 'accessLevel',
        'createAt'    => 'createAt',
        'externUid'   => 'externUid',
        'id'          => 'id',
        'sourceId'    => 'sourceId',
        'sourceType'  => 'sourceType',
        'updateAt'    => 'updateAt',
        'userId'      => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }
        if (null !== $this->createAt) {
            $res['createAt'] = $this->createAt;
        }
        if (null !== $this->externUid) {
            $res['externUid'] = $this->externUid;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->updateAt) {
            $res['updateAt'] = $this->updateAt;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }
        if (isset($map['createAt'])) {
            $model->createAt = $map['createAt'];
        }
        if (isset($map['externUid'])) {
            $model->externUid = $map['externUid'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }
        if (isset($map['updateAt'])) {
            $model->updateAt = $map['updateAt'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
