<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class GrantPromotionToUserShrinkRequest extends Model
{
    /**
     * @description 业务ID
     *
     * @var string
     */
    public $bizId;

    /**
     * @description 过期时间
     *
     * @var int
     */
    public $expireSeconds;

    /**
     * @description 发放模式
     *
     * @var string
     */
    public $grantMode;

    /**
     * @description 发放方式
     *
     * @var string
     */
    public $grantWay;

    /**
     * @description 幂等ID
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @description 优惠元数据ID
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description 安全码
     *
     * @var string
     */
    public $securityCode;

    /**
     * @description 用户ID
     *
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @description 扩展信息
     *
     * @var string
     */
    public $bodyShrink;
    protected $_name = [
        'bizId'            => 'BizId',
        'expireSeconds'    => 'ExpireSeconds',
        'grantMode'        => 'GrantMode',
        'grantWay'         => 'GrantWay',
        'idempotentId'     => 'IdempotentId',
        'promotionId'      => 'PromotionId',
        'securityCode'     => 'SecurityCode',
        'thirdPartyUserId' => 'ThirdPartyUserId',
        'bodyShrink'       => 'body',
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
        if (null !== $this->bodyShrink) {
            $res['body'] = $this->bodyShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantPromotionToUserShrinkRequest
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
            $model->bodyShrink = $map['body'];
        }

        return $model;
    }
}
