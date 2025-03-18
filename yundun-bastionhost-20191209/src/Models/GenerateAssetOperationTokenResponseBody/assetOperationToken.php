<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GenerateAssetOperationTokenResponseBody;

use AlibabaCloud\Tea\Model;

class assetOperationToken extends Model
{
    /**
     * @description The remaining number of times that you can use the O\\&M token.
     *
     * @example 1
     *
     * @var int
     */
    public $countLeft;

    /**
     * @description The time when the O\\&M token expires. The value is a UNIX timestamp.
     *
     * @example 1709110797
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description Indicates whether the number of times that you can use the O\\&M token is limited.
     *
     * @example true
     *
     * @var bool
     */
    public $hasCountLimit;

    /**
     * @description The maximum number of renewals. A value of 0 indicates that renewal is not supported.
     *
     * @example 10
     *
     * @var int
     */
    public $maxRenewCount;

    /**
     * @description The number of times the O\\&M token is renewed.
     *
     * @example 1
     *
     * @var int
     */
    public $renewCount;

    /**
     * @description The single sign-on (SSO) URL.
     *
     * @example sso://eyJOT0RFX0NPTU1PTiI6eyJNb2R******
     *
     * @var string
     */
    public $ssoUrl;

    /**
     * @description The O\\&M token that you apply for.
     *
     * @example NmYyMmEzNmMwYzljNGY******
     *
     * @var string
     */
    public $token;

    /**
     * @description The ID of the O\\&M token.
     *
     * @example 1
     *
     * @var string
     */
    public $tokenId;
    protected $_name = [
        'countLeft' => 'CountLeft',
        'expireTime' => 'ExpireTime',
        'hasCountLimit' => 'HasCountLimit',
        'maxRenewCount' => 'MaxRenewCount',
        'renewCount' => 'RenewCount',
        'ssoUrl' => 'SsoUrl',
        'token' => 'Token',
        'tokenId' => 'TokenId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->countLeft) {
            $res['CountLeft'] = $this->countLeft;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->hasCountLimit) {
            $res['HasCountLimit'] = $this->hasCountLimit;
        }
        if (null !== $this->maxRenewCount) {
            $res['MaxRenewCount'] = $this->maxRenewCount;
        }
        if (null !== $this->renewCount) {
            $res['RenewCount'] = $this->renewCount;
        }
        if (null !== $this->ssoUrl) {
            $res['SsoUrl'] = $this->ssoUrl;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->tokenId) {
            $res['TokenId'] = $this->tokenId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetOperationToken
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CountLeft'])) {
            $model->countLeft = $map['CountLeft'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['HasCountLimit'])) {
            $model->hasCountLimit = $map['HasCountLimit'];
        }
        if (isset($map['MaxRenewCount'])) {
            $model->maxRenewCount = $map['MaxRenewCount'];
        }
        if (isset($map['RenewCount'])) {
            $model->renewCount = $map['RenewCount'];
        }
        if (isset($map['SsoUrl'])) {
            $model->ssoUrl = $map['SsoUrl'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TokenId'])) {
            $model->tokenId = $map['TokenId'];
        }

        return $model;
    }
}
