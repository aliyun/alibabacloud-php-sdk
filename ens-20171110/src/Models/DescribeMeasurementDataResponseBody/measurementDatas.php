<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody\measurementDatas\measurementData;
use AlibabaCloud\Tea\Model;

class measurementDatas extends Model
{
    /**
     * @var measurementData[]
     */
    public $measurementData;
    protected $_name = [
        'measurementData' => 'MeasurementData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->measurementData) {
            $res['MeasurementData'] = [];
            if (null !== $this->measurementData && \is_array($this->measurementData)) {
                $n = 0;
                foreach ($this->measurementData as $item) {
                    $res['MeasurementData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return measurementDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MeasurementData'])) {
            if (!empty($map['MeasurementData'])) {
                $model->measurementData = [];
                $n                      = 0;
                foreach ($map['MeasurementData'] as $item) {
                    $model->measurementData[$n++] = null !== $item ? measurementData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
