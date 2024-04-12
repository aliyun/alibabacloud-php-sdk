<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GenerateAssetOperationTokenResponseBody;

use AlibabaCloud\Tea\Model;

class assetOperationToken extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $countLeft;

    /**
     * @example 1709110797
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasCountLimit;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxRenewCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $renewCount;

    /**
     * @example NmYyMmEzNmMwYzljNGY******
     *
     * @var string
     */
    public $token;

    /**
     * @example 1
     *
     * @var string
     */
    public $tokenId;
    protected $_name = [
        'countLeft'     => 'CountLeft',
        'expireTime'    => 'ExpireTime',
        'hasCountLimit' => 'HasCountLimit',
        'maxRenewCount' => 'MaxRenewCount',
        'renewCount'    => 'RenewCount',
        'token'         => 'Token',
        'tokenId'       => 'TokenId',
    ];

    public function validate()
    {
    }

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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TokenId'])) {
            $model->tokenId = $map['TokenId'];
        }

        return $model;
    }
}
