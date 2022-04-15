<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\TotalAppliedNearRealStatResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 实时消耗并发
     *
     * @var int
     */
    public $totalConcurrency;

    /**
     * @description 实时消耗CU
     *
     * @var float
     */
    public $totalConsumptionCu;
    protected $_name = [
        'totalConcurrency'   => 'TotalConcurrency',
        'totalConsumptionCu' => 'TotalConsumptionCu',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalConcurrency) {
            $res['TotalConcurrency'] = $this->totalConcurrency;
        }
        if (null !== $this->totalConsumptionCu) {
            $res['TotalConsumptionCu'] = $this->totalConsumptionCu;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalConcurrency'])) {
            $model->totalConcurrency = $map['TotalConcurrency'];
        }
        if (isset($map['TotalConsumptionCu'])) {
            $model->totalConsumptionCu = $map['TotalConsumptionCu'];
        }

        return $model;
    }
}
