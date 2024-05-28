<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateUserKeyRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example 2022-03-12 12:00:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description This parameter is required.
     *
     * @example ALL
     *
     * @var string
     */
    public $keyScope;

    /**
     * @description This parameter is required.
     *
     * @example xxx
     *
     * @var string
     */
    public $publicKey;

    /**
     * @description This parameter is required.
     *
     * @example SSH Title
     *
     * @var string
     */
    public $title;

    /**
     * @description This parameter is required.
     *
     * @example 5ebbc0228123212b59xxxxx
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'expireTime'     => 'expireTime',
        'keyScope'       => 'keyScope',
        'publicKey'      => 'publicKey',
        'title'          => 'title',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateUserKeyRequest
     */
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
