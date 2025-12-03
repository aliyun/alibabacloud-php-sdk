<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateUserKeyRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $keyScope;

    /**
     * @var string
     */
    public $publicKey;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken' => 'accessToken',
        'expireTime' => 'expireTime',
        'keyScope' => 'keyScope',
        'publicKey' => 'publicKey',
        'title' => 'title',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->keyScope) {
            $res['keyScope'] = $this->keyScope;
        }

        if (null !== $this->publicKey) {
            $res['publicKey'] = $this->publicKey;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
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
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['keyScope'])) {
            $model->keyScope = $map['keyScope'];
        }

        if (isset($map['publicKey'])) {
            $model->publicKey = $map['publicKey'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
