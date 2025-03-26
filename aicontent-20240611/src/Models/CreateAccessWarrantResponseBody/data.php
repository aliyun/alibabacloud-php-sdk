<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\CreateAccessWarrantResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $accessWarrantId;

    /**
     * @var string
     */
    public $applicationAccessId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'accessWarrantId' => 'AccessWarrantId',
        'applicationAccessId' => 'ApplicationAccessId',
        'createTime' => 'CreateTime',
        'expireTime' => 'ExpireTime',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->accessWarrantId) {
            $res['AccessWarrantId'] = $this->accessWarrantId;
        }

        if (null !== $this->applicationAccessId) {
            $res['ApplicationAccessId'] = $this->applicationAccessId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        if (isset($map['AccessWarrantId'])) {
            $model->accessWarrantId = $map['AccessWarrantId'];
        }

        if (isset($map['ApplicationAccessId'])) {
            $model->applicationAccessId = $map['ApplicationAccessId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
