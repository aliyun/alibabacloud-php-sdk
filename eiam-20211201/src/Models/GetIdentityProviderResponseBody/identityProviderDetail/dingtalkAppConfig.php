<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\Tea\Model;

class dingtalkAppConfig extends Model
{
    /**
     * @description The AppKey for the application.
     *
     * @example 41reopmwoy9s
     *
     * @var string
     */
    public $appKey;

    /**
     * @description The details of the application secret.
     *
     * @example REOQ6Cl55kriOd8NOBeqWYLKpHR4p6fdZxxxx
     *
     * @var string
     */
    public $appSecret;

    /**
     * @description DingTalk corpId.
     *
     * @example 3756043633237690761
     *
     * @var string
     */
    public $corpId;

    /**
     * @description DingTalk Version.
     *
     * @example public_dingtalk
     *
     * @var string
     */
    public $dingtalkVersion;

    /**
     * @description DingTalk  encrypt key.
     *
     * @example 29003eb11d0a28b4802a6f02fb8aa25dff730e2ac26ffdxxx
     *
     * @var string
     */
    public $encryptKey;

    /**
     * @description DingTalk  verification token.
     *
     * @example 5ba9c127a7abe029003eb11d0a28b4802a6f02fb8aa25dff730e2ac26ffxxxxx
     *
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
