<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\Tea\Model;

class larkConfig extends Model
{
    /**
     * @description The application ID.
     *
     * @example cli_a7a99f53a317xxxx
     *
     * @var string
     */
    public $appId;

    /**
     * @description The creation time.
     *
     * @example ***
     *
     * @var string
     */
    public $appSecret;

    /**
     * @description Feishu encryptKey.
     *
     * @example c5db46da8d4b751a7878e5d670402fb60e4d2391de3fa01f7c9e6353f6d1xxxxx
     *
     * @var string
     */
    public $encryptKey;

    /**
     * @description Feishu enterprise code.
     *
     * @example FX1231xxxx
     *
     * @var string
     */
    public $enterpriseNumber;

    /**
     * @description Feishu verificationToken.
     *
     * @example c5db46da8d4b751a7878e5d670402fb60e4d2391de3fa01f7c9e6353f6d1xxxxx
     *
     * @var string
     */
    public $verificationToken;
    protected $_name = [
        'appId' => 'AppId',
        'appSecret' => 'AppSecret',
        'encryptKey' => 'EncryptKey',
        'enterpriseNumber' => 'EnterpriseNumber',
        'verificationToken' => 'VerificationToken',
    ];

    public function validate() {}

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
