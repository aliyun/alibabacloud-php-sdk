<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GenerateAssetOperationTokenResponseBody;

use AlibabaCloud\Dara\Model;

class assetOperationToken extends Model
{
    /**
     * @var int
     */
    public $countLeft;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $hasCountLimit;

    /**
     * @var int
     */
    public $maxRenewCount;

    /**
     * @var int
     */
    public $renewCount;

    /**
     * @var string
     */
    public $ssoUrl;

    /**
     * @var string
     */
    public $token;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
