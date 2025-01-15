<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Tea\Model;

class larkConfig extends Model
{
    /**
     * @example cli_xxxx
     *
     * @var string
     */
    public $appId;

    /**
     * @example KiiLzh5Dueh4wbLxxxx
     *
     * @var string
     */
    public $appSecret;

    /**
     * @var string
     */
    public $encryptKey;

    /**
     * @example FSX123111xxx
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return larkConfig
     */
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
