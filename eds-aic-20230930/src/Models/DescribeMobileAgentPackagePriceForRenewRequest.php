<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeMobileAgentPackagePriceForRenewRequest extends Model
{
    /**
     * @var string[]
     */
    public $mobileAgentPackageIds;

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
        'mobileAgentPackageIds' => 'MobileAgentPackageIds',
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
