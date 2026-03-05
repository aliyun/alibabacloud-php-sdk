<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppRecommendedCommoditiesResponseBody\module;

use AlibabaCloud\Dara\Model;

class commodities extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string[]
     */
    public $extend;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $promotionCommodityId;

    /**
     * @var string
     */
    public $redirectUrl;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'extend' => 'Extend',
        'orderType' => 'OrderType',
        'priority' => 'Priority',
        'promotionCommodityId' => 'PromotionCommodityId',
        'redirectUrl' => 'RedirectUrl',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->extend)) {
            Model::validateArray($this->extend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->extend) {
            if (\is_array($this->extend)) {
                $res['Extend'] = [];
                foreach ($this->extend as $key1 => $value1) {
                    $res['Extend'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->promotionCommodityId) {
            $res['PromotionCommodityId'] = $this->promotionCommodityId;
        }

        if (null !== $this->redirectUrl) {
            $res['RedirectUrl'] = $this->redirectUrl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['Extend'])) {
            if (!empty($map['Extend'])) {
                $model->extend = [];
                foreach ($map['Extend'] as $key1 => $value1) {
                    $model->extend[$key1] = $value1;
                }
            }
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['PromotionCommodityId'])) {
            $model->promotionCommodityId = $map['PromotionCommodityId'];
        }

        if (isset($map['RedirectUrl'])) {
            $model->redirectUrl = $map['RedirectUrl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
