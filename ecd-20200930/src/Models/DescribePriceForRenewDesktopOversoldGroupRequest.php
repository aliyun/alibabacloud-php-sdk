<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribePriceForRenewDesktopOversoldGroupRequest extends Model
{
    /**
     * @var string
     */
    public $oversoldGroupId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;
    protected $_name = [
        'oversoldGroupId' => 'OversoldGroupId',
        'period'          => 'Period',
        'periodUnit'      => 'PeriodUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oversoldGroupId) {
            $res['OversoldGroupId'] = $this->oversoldGroupId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceForRenewDesktopOversoldGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OversoldGroupId'])) {
            $model->oversoldGroupId = $map['OversoldGroupId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        return $model;
    }
}
