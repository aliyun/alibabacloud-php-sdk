<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class RenewMobileAgentPackageRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string[]
     */
    public $mobileAgentPackageIds;

    /**
     * @var string
     */
    public $paidCallbackUrl;

    /**
     * @var int
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
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'mobileAgentPackageIds' => 'MobileAgentPackageIds',
        'paidCallbackUrl' => 'PaidCallbackUrl',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'promotionId' => 'PromotionId',
    ];

    public function validate()
    {
        if (\is_array($this->mobileAgentPackageIds)) {
            Model::validateArray($this->mobileAgentPackageIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->mobileAgentPackageIds) {
            if (\is_array($this->mobileAgentPackageIds)) {
                $res['MobileAgentPackageIds'] = [];
                $n1 = 0;
                foreach ($this->mobileAgentPackageIds as $item1) {
                    $res['MobileAgentPackageIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paidCallbackUrl) {
            $res['PaidCallbackUrl'] = $this->paidCallbackUrl;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['MobileAgentPackageIds'])) {
            if (!empty($map['MobileAgentPackageIds'])) {
                $model->mobileAgentPackageIds = [];
                $n1 = 0;
                foreach ($map['MobileAgentPackageIds'] as $item1) {
                    $model->mobileAgentPackageIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PaidCallbackUrl'])) {
            $model->paidCallbackUrl = $map['PaidCallbackUrl'];
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
