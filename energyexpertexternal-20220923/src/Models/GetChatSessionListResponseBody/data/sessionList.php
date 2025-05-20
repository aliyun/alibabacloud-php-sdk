<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetChatSessionListResponseBody\data;

use AlibabaCloud\Dara\Model;

class sessionList extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'createTime' => 'createTime',
        'folderId' => 'folderId',
        'name' => 'name',
        'sessionId' => 'sessionId',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
