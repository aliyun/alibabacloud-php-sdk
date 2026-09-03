<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;

use AlibabaCloud\Dara\Model;

class purchaseOptions extends Model
{
    /**
     * @var int
     */
    public $creditPackageAmountSpec;

    /**
     * @var int
     */
    public $creditPackagePeriod;

    /**
     * @var string
     */
    public $creditPackagePeriodUnit;

    /**
     * @var int
     */
    public $monthlyCredits;
    protected $_name = [
        'creditPackageAmountSpec' => 'CreditPackageAmountSpec',
        'creditPackagePeriod' => 'CreditPackagePeriod',
        'creditPackagePeriodUnit' => 'CreditPackagePeriodUnit',
        'monthlyCredits' => 'MonthlyCredits',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creditPackageAmountSpec) {
            $res['CreditPackageAmountSpec'] = $this->creditPackageAmountSpec;
        }

        if (null !== $this->creditPackagePeriod) {
            $res['CreditPackagePeriod'] = $this->creditPackagePeriod;
        }

        if (null !== $this->creditPackagePeriodUnit) {
            $res['CreditPackagePeriodUnit'] = $this->creditPackagePeriodUnit;
        }

        if (null !== $this->monthlyCredits) {
            $res['MonthlyCredits'] = $this->monthlyCredits;
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
        if (isset($map['CreditPackageAmountSpec'])) {
            $model->creditPackageAmountSpec = $map['CreditPackageAmountSpec'];
        }

        if (isset($map['CreditPackagePeriod'])) {
            $model->creditPackagePeriod = $map['CreditPackagePeriod'];
        }

        if (isset($map['CreditPackagePeriodUnit'])) {
            $model->creditPackagePeriodUnit = $map['CreditPackagePeriodUnit'];
        }

        if (isset($map['MonthlyCredits'])) {
            $model->monthlyCredits = $map['MonthlyCredits'];
        }

        return $model;
    }
}
