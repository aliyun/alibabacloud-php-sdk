<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class GrantPromotionToUserRequest extends Model
{
    /**
     * @example LMALL20211118****
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 2554265
     *
     * @var int
     */
    public $expireSeconds;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $grantMode;

    /**
     * @example latour2
     *
     * @var string
     */
    public $grantWay;

    /**
     * @example 20211212211381431746-1202
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @example 66482394364783****
     *
     * @var string
     */
    public $promotionId;

    /**
     * @example 6aa6ea6af00b453eafc3128d41858bf6
     *
     * @var string
     */
    public $securityCode;

    /**
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @var mixed[]
     */
    public $body;
    protected $_name = [
        'bizId'            => 'BizId',
        'expireSeconds'    => 'ExpireSeconds',
        'grantMode'        => 'GrantMode',
        'grantWay'         => 'GrantWay',
        'idempotentId'     => 'IdempotentId',
        'promotionId'      => 'PromotionId',
        'securityCode'     => 'SecurityCode',
        'thirdPartyUserId' => 'ThirdPartyUserId',
        'body'             => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->expireSeconds) {
            $res['ExpireSeconds'] = $this->expireSeconds;
        }
        if (null !== $this->grantMode) {
            $res['GrantMode'] = $this->grantMode;
        }
        if (null !== $this->grantWay) {
            $res['GrantWay'] = $this->grantWay;
        }
        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->securityCode) {
            $res['SecurityCode'] = $this->securityCode;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantPromotionToUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ExpireSeconds'])) {
            $model->expireSeconds = $map['ExpireSeconds'];
        }
        if (isset($map['GrantMode'])) {
            $model->grantMode = $map['GrantMode'];
        }
        if (isset($map['GrantWay'])) {
            $model->grantWay = $map['GrantWay'];
        }
        if (isset($map['IdempotentId'])) {
            $model->idempotentId = $map['IdempotentId'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['SecurityCode'])) {
            $model->securityCode = $map['SecurityCode'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
