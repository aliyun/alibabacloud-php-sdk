<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody\measurementDatas\measurementData;

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
        if (\is_array($this->measurementData)) {
            Model::validateArray($this->measurementData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->measurementData) {
            if (\is_array($this->measurementData)) {
                $res['MeasurementData'] = [];
                $n1 = 0;
                foreach ($this->measurementData as $item1) {
                    $res['MeasurementData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MeasurementData'])) {
            if (!empty($map['MeasurementData'])) {
                $model->measurementData = [];
                $n1 = 0;
                foreach ($map['MeasurementData'] as $item1) {
                    $model->measurementData[$n1] = measurementData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
