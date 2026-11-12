<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateOrderRequest\businessInfo\promotionOptions;

class businessInfo extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $orderSource;

    /**
     * @var promotionOptions
     */
    public $promotionOptions;

    /**
     * @var bool
     */
    public $useCoupon;

    /**
     * @var string
     */
    public $weChatProType;

    /**
     * @var string
     */
    public $lxChannelCookieValue;
    protected $_name = [
        'aliyunLang' => 'AliyunLang',
        'orderSource' => 'OrderSource',
        'promotionOptions' => 'PromotionOptions',
        'useCoupon' => 'UseCoupon',
        'weChatProType' => 'WeChatProType',
        'lxChannelCookieValue' => 'lx_channel_cookie_value',
    ];

    public function validate()
    {
        if (null !== $this->promotionOptions) {
            $this->promotionOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->orderSource) {
            $res['OrderSource'] = $this->orderSource;
        }

        if (null !== $this->promotionOptions) {
            $res['PromotionOptions'] = null !== $this->promotionOptions ? $this->promotionOptions->toArray($noStream) : $this->promotionOptions;
        }

        if (null !== $this->useCoupon) {
            $res['UseCoupon'] = $this->useCoupon;
        }

        if (null !== $this->weChatProType) {
            $res['WeChatProType'] = $this->weChatProType;
        }

        if (null !== $this->lxChannelCookieValue) {
            $res['lx_channel_cookie_value'] = $this->lxChannelCookieValue;
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
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['OrderSource'])) {
            $model->orderSource = $map['OrderSource'];
        }

        if (isset($map['PromotionOptions'])) {
            $model->promotionOptions = promotionOptions::fromMap($map['PromotionOptions']);
        }

        if (isset($map['UseCoupon'])) {
            $model->useCoupon = $map['UseCoupon'];
        }

        if (isset($map['WeChatProType'])) {
            $model->weChatProType = $map['WeChatProType'];
        }

        if (isset($map['lx_channel_cookie_value'])) {
            $model->lxChannelCookieValue = $map['lx_channel_cookie_value'];
        }

        return $model;
    }
}
