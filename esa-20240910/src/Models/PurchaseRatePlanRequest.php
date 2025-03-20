<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class PurchaseRatePlanRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @description Specifies whether to enable auto payment.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Auto-renewal:
     * - true: Enable auto-renewal.
     * - false: Disable auto-renewal.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The billing method. Valid values:
     *
     *   PREPAY: subscription.
     *   POSTPAY: pay-as-you-go.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The service location. Valid values:
     *
     *   domestic: the Chinese mainland.
     *   global: global.
     *   overseas: outside the Chinese mainland.
     *
     * @example domestic
     *
     * @var string
     */
    public $coverage;

    /**
     * @description Subscription period (in months).
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description Package code.
     *
     * @example entranceplan
     *
     * @var string
     */
    public $planCode;

    /**
     * @description Package name.
     *
     * @example basic
     *
     * @var string
     */
    public $planName;

    /**
     * @description Site name.
     *
     * @example test.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @description The DNS setup option for the website. Valid values:
     *
     *   NS
     *   CNAME
     *
     * @example CNAME
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'amount' => 'Amount',
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'chargeType' => 'ChargeType',
        'coverage' => 'Coverage',
        'period' => 'Period',
        'planCode' => 'PlanCode',
        'planName' => 'PlanName',
        'siteName' => 'SiteName',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->planCode) {
            $res['PlanCode'] = $this->planCode;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseRatePlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PlanCode'])) {
            $model->planCode = $map['PlanCode'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
