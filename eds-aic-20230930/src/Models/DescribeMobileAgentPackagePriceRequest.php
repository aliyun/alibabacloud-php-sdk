<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeMobileAgentPackagePriceRequest extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var int
     */
    public $creditAmount;

    /**
     * @var string
     */
    public $mobileAgentPackageSpec;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $promotionId;
    protected $_name = [
        'amount' => 'Amount',
        'bizRegionId' => 'BizRegionId',
        'creditAmount' => 'CreditAmount',
        'mobileAgentPackageSpec' => 'MobileAgentPackageSpec',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'promotionId' => 'PromotionId',
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

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->creditAmount) {
            $res['CreditAmount'] = $this->creditAmount;
        }

        if (null !== $this->mobileAgentPackageSpec) {
            $res['MobileAgentPackageSpec'] = $this->mobileAgentPackageSpec;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
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

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['CreditAmount'])) {
            $model->creditAmount = $map['CreditAmount'];
        }

        if (isset($map['MobileAgentPackageSpec'])) {
            $model->mobileAgentPackageSpec = $map['MobileAgentPackageSpec'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        return $model;
    }
}
