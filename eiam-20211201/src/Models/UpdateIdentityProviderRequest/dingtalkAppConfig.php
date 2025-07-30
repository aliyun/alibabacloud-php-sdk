<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest;

use AlibabaCloud\Tea\Model;

class dingtalkAppConfig extends Model
{
    /**
     * @description 钉钉一方应用的AppKey
     *
     * @example 49nyeaqumk7f
     *
     * @var string
     */
    public $appKey;

    /**
     * @description 钉钉一方应用的AppSecret
     *
     * @example 86nozWFL2CxgwnhKiXaG8dN4keLPkUNc5xxxx
     *
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
    public $verificationToken;
    protected $_name = [
        'appKey' => 'AppKey',
        'appSecret' => 'AppSecret',
        'encryptKey' => 'EncryptKey',
        'verificationToken' => 'VerificationToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->encryptKey) {
            $res['EncryptKey'] = $this->encryptKey;
        }
        if (null !== $this->verificationToken) {
            $res['VerificationToken'] = $this->verificationToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dingtalkAppConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
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
