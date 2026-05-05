<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeductionStatisticRequest;

use AlibabaCloud\Dara\Model;

class periods extends Model
{
    /**
     * @var string
     */
    public $baseTime;

    /**
     * @var string
     */
    public $periodUnit;
    protected $_name = [
        'baseTime' => 'BaseTime',
        'periodUnit' => 'PeriodUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseTime) {
            $res['BaseTime'] = $this->baseTime;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
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
        if (isset($map['BaseTime'])) {
            $model->baseTime = $map['BaseTime'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        return $model;
    }
}
