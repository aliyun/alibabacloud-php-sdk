<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Dara\Model;

class larkConfig extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appSecret;
    /**
     * @var string
     */
    public $encryptKey;
    /**
     * @var string
     */
    public $enterpriseNumber;
    /**
     * @var string
     */
    public $verificationToken;
    protected $_name = [
        'appId'             => 'AppId',
        'appSecret'         => 'AppSecret',
        'encryptKey'        => 'EncryptKey',
        'enterpriseNumber'  => 'EnterpriseNumber',
        'verificationToken' => 'VerificationToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }

        if (null !== $this->encryptKey) {
            $res['EncryptKey'] = $this->encryptKey;
        }

        if (null !== $this->enterpriseNumber) {
            $res['EnterpriseNumber'] = $this->enterpriseNumber;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }

        if (isset($map['EncryptKey'])) {
            $model->encryptKey = $map['EncryptKey'];
        }

        if (isset($map['EnterpriseNumber'])) {
            $model->enterpriseNumber = $map['EnterpriseNumber'];
        }

        if (isset($map['VerificationToken'])) {
            $model->verificationToken = $map['VerificationToken'];
        }

        return $model;
    }
}
