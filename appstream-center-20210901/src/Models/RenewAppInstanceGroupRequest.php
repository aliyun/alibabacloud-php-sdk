<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class RenewAppInstanceGroupRequest extends Model
{
    /**
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @example Day
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @example 17440009****
     *
     * @var string
     */
    public $promotionId;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'autoPay'            => 'AutoPay',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'productType'        => 'ProductType',
        'promotionId'        => 'PromotionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewAppInstanceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        return $model;
    }
}
