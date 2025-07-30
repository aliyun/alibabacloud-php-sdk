<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Tea\Model;

class dingtalkAppConfig extends Model
{
    /**
     * @description AppKey of the DingTalk application.
     *
     * @example Xczngvfemo4e
     *
     * @var string
     */
    public $appKey;

    /**
     * @description AppSecret of the DingTalk application.
     *
     * @example 5d405a12a6f84ad4ab05ee09axxxx
     *
     * @var string
     */
    public $appSecret;

    /**
     * @description CorpId of the DingTalk application.
     *
     * @example 3075680424786133505
     *
     * @var string
     */
    public $corpId;

    /**
     * @description DingTalk edition. Valid values:
     *
     * public_dingtalk – Standard DingTalk.
     *
     * private_dingtalk – Dedicated DingTalk.
     *
     * @example public_dingtalk
     *
     * @var string
     */
    public $dingtalkVersion;

    /**
     * @description DingTalk encrypt key.
     *
     * @example 29003eb11d0a28b4802a6f02fb8aa25dff730e2ac26ffd200dxxxx
     *
     * @var string
     */
    public $encryptKey;

    /**
     * @description DingTalk verification token.
     *
     * @example 5ba9c127a7abe029003eb11d0a28b4802a6f02fb8aa25dff730e2ac26ffd200dxxxx
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
