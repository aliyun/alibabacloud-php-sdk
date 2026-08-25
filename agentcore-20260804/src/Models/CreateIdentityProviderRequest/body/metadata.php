<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateIdentityProviderRequest\body;

use AlibabaCloud\Dara\Model;

class metadata extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $encryptKey;

    /**
     * @var string
     */
    public $verificationToken;
    protected $_name = [
        'appId' => 'appId',
        'appKey' => 'appKey',
        'appSecret' => 'appSecret',
        'corpId' => 'corpId',
        'encryptKey' => 'encryptKey',
        'verificationToken' => 'verificationToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->appKey) {
            $res['appKey'] = $this->appKey;
        }

        if (null !== $this->appSecret) {
            $res['appSecret'] = $this->appSecret;
        }

        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }

        if (null !== $this->encryptKey) {
            $res['encryptKey'] = $this->encryptKey;
        }

        if (null !== $this->verificationToken) {
            $res['verificationToken'] = $this->verificationToken;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['appKey'])) {
            $model->appKey = $map['appKey'];
        }

        if (isset($map['appSecret'])) {
            $model->appSecret = $map['appSecret'];
        }

        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }

        if (isset($map['encryptKey'])) {
            $model->encryptKey = $map['encryptKey'];
        }

        if (isset($map['verificationToken'])) {
            $model->verificationToken = $map['verificationToken'];
        }

        return $model;
    }
}
