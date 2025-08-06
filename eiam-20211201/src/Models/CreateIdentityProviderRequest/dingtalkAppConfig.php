<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Dara\Model;

class dingtalkAppConfig extends Model
{
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
    public $dingtalkVersion;

    /**
     * @var string
     */
    public $encryptKey;

    /**
     * @var string
     */
    public $verificationToken;
    protected $_name = [
        'appKey' => 'AppKey',
        'appSecret' => 'AppSecret',
        'corpId' => 'CorpId',
        'dingtalkVersion' => 'DingtalkVersion',
        'encryptKey' => 'EncryptKey',
        'verificationToken' => 'VerificationToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }

        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        if (null !== $this->dingtalkVersion) {
            $res['DingtalkVersion'] = $this->dingtalkVersion;
        }

        if (null !== $this->encryptKey) {
            $res['EncryptKey'] = $this->encryptKey;
        }

        if (null !== $this->verificationToken) {
            $res['VerificationToken'] = $this->verificationToken;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }

        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        if (isset($map['DingtalkVersion'])) {
            $model->dingtalkVersion = $map['DingtalkVersion'];
        }

        if (isset($map['EncryptKey'])) {
            $model->encryptKey = $map['EncryptKey'];
        }

        if (isset($map['VerificationToken'])) {
            $model->verificationToken = $map['VerificationToken'];
        }

        return $model;
    }
}
