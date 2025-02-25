<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class PurchaseRatePlanRequest extends Model
{
    /**
     * @var int
     */
    public $amount;
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var bool
     */
    public $autoRenew;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var string
     */
    public $coverage;
    /**
     * @var int
     */
    public $period;
    /**
     * @var string
     */
    public $planCode;
    /**
     * @var string
     */
    public $planName;
    /**
     * @var string
     */
    public $siteName;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'amount'     => 'Amount',
        'autoPay'    => 'AutoPay',
        'autoRenew'  => 'AutoRenew',
        'chargeType' => 'ChargeType',
        'coverage'   => 'Coverage',
        'period'     => 'Period',
        'planCode'   => 'PlanCode',
        'planName'   => 'PlanName',
        'siteName'   => 'SiteName',
        'type'       => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
