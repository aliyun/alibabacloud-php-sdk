<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CssCreateOrderParam extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var int
     */
    public $buyerId;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var int
     */
    public $childId;

    /**
     * @var string
     */
    public $cilentIp;

    /**
     * @var CssInstanceCommodity[]
     */
    public $commodities;

    /**
     * @var string
     */
    public $createrNick;

    /**
     * @var mixed
     */
    public $cssAuthRequestParam;

    /**
     * @var string
     */
    public $fromApp;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $marketType;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $orderOrigin;

    /**
     * @var string[]
     */
    public $orderParams;

    /**
     * @var int
     */
    public $payerId;

    /**
     * @var int
     */
    public $planGroupId;

    /**
     * @var int
     */
    public $planId;

    /**
     * @var string
     */
    public $planInstanceId;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var mixed
     */
    public $promotionInputParam;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $skipChannel;

    /**
     * @var string
     */
    public $token;

    /**
     * @var mixed
     */
    public $transientAccess;

    /**
     * @var string
     */
    public $umidToken;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'agentId'             => 'agentId',
        'autoPay'             => 'autoPay',
        'autoUseCoupon'       => 'autoUseCoupon',
        'bid'                 => 'bid',
        'buyerId'             => 'buyerId',
        'certificate'         => 'certificate',
        'childId'             => 'childId',
        'cilentIp'            => 'cilentIp',
        'commodities'         => 'commodities',
        'createrNick'         => 'createrNick',
        'cssAuthRequestParam' => 'cssAuthRequestParam',
        'fromApp'             => 'fromApp',
        'language'            => 'language',
        'marketType'          => 'marketType',
        'memo'                => 'memo',
        'orderOrigin'         => 'orderOrigin',
        'orderParams'         => 'orderParams',
        'payerId'             => 'payerId',
        'planGroupId'         => 'planGroupId',
        'planId'              => 'planId',
        'planInstanceId'      => 'planInstanceId',
        'promotionCode'       => 'promotionCode',
        'promotionInputParam' => 'promotionInputParam',
        'requestId'           => 'requestId',
        'skipChannel'         => 'skipChannel',
        'token'               => 'token',
        'transientAccess'     => 'transientAccess',
        'umidToken'           => 'umidToken',
        'userId'              => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        if (null !== $this->autoPay) {
            $res['autoPay'] = $this->autoPay;
        }
        if (null !== $this->autoUseCoupon) {
            $res['autoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->bid) {
            $res['bid'] = $this->bid;
        }
        if (null !== $this->buyerId) {
            $res['buyerId'] = $this->buyerId;
        }
        if (null !== $this->certificate) {
            $res['certificate'] = $this->certificate;
        }
        if (null !== $this->childId) {
            $res['childId'] = $this->childId;
        }
        if (null !== $this->cilentIp) {
            $res['cilentIp'] = $this->cilentIp;
        }
        if (null !== $this->commodities) {
            $res['commodities'] = [];
            if (null !== $this->commodities && \is_array($this->commodities)) {
                $n = 0;
                foreach ($this->commodities as $item) {
                    $res['commodities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createrNick) {
            $res['createrNick'] = $this->createrNick;
        }
        if (null !== $this->cssAuthRequestParam) {
            $res['cssAuthRequestParam'] = $this->cssAuthRequestParam;
        }
        if (null !== $this->fromApp) {
            $res['fromApp'] = $this->fromApp;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->marketType) {
            $res['marketType'] = $this->marketType;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->orderOrigin) {
            $res['orderOrigin'] = $this->orderOrigin;
        }
        if (null !== $this->orderParams) {
            $res['orderParams'] = $this->orderParams;
        }
        if (null !== $this->payerId) {
            $res['payerId'] = $this->payerId;
        }
        if (null !== $this->planGroupId) {
            $res['planGroupId'] = $this->planGroupId;
        }
        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }
        if (null !== $this->planInstanceId) {
            $res['planInstanceId'] = $this->planInstanceId;
        }
        if (null !== $this->promotionCode) {
            $res['promotionCode'] = $this->promotionCode;
        }
        if (null !== $this->promotionInputParam) {
            $res['promotionInputParam'] = $this->promotionInputParam;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->skipChannel) {
            $res['skipChannel'] = $this->skipChannel;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->transientAccess) {
            $res['transientAccess'] = $this->transientAccess;
        }
        if (null !== $this->umidToken) {
            $res['umidToken'] = $this->umidToken;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CssCreateOrderParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }
        if (isset($map['autoPay'])) {
            $model->autoPay = $map['autoPay'];
        }
        if (isset($map['autoUseCoupon'])) {
            $model->autoUseCoupon = $map['autoUseCoupon'];
        }
        if (isset($map['bid'])) {
            $model->bid = $map['bid'];
        }
        if (isset($map['buyerId'])) {
            $model->buyerId = $map['buyerId'];
        }
        if (isset($map['certificate'])) {
            $model->certificate = $map['certificate'];
        }
        if (isset($map['childId'])) {
            $model->childId = $map['childId'];
        }
        if (isset($map['cilentIp'])) {
            $model->cilentIp = $map['cilentIp'];
        }
        if (isset($map['commodities'])) {
            if (!empty($map['commodities'])) {
                $model->commodities = [];
                $n                  = 0;
                foreach ($map['commodities'] as $item) {
                    $model->commodities[$n++] = null !== $item ? CssInstanceCommodity::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['createrNick'])) {
            $model->createrNick = $map['createrNick'];
        }
        if (isset($map['cssAuthRequestParam'])) {
            $model->cssAuthRequestParam = $map['cssAuthRequestParam'];
        }
        if (isset($map['fromApp'])) {
            $model->fromApp = $map['fromApp'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['marketType'])) {
            $model->marketType = $map['marketType'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['orderOrigin'])) {
            $model->orderOrigin = $map['orderOrigin'];
        }
        if (isset($map['orderParams'])) {
            $model->orderParams = $map['orderParams'];
        }
        if (isset($map['payerId'])) {
            $model->payerId = $map['payerId'];
        }
        if (isset($map['planGroupId'])) {
            $model->planGroupId = $map['planGroupId'];
        }
        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }
        if (isset($map['planInstanceId'])) {
            $model->planInstanceId = $map['planInstanceId'];
        }
        if (isset($map['promotionCode'])) {
            $model->promotionCode = $map['promotionCode'];
        }
        if (isset($map['promotionInputParam'])) {
            $model->promotionInputParam = $map['promotionInputParam'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['skipChannel'])) {
            $model->skipChannel = $map['skipChannel'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }
        if (isset($map['transientAccess'])) {
            $model->transientAccess = $map['transientAccess'];
        }
        if (isset($map['umidToken'])) {
            $model->umidToken = $map['umidToken'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
