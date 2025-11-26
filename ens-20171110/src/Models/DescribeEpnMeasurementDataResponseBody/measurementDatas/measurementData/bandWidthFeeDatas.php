<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponseBody\measurementDatas\measurementData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponseBody\measurementDatas\measurementData\bandWidthFeeDatas\bandWidthFeeData;

class bandWidthFeeDatas extends Model
{
    /**
     * @var bandWidthFeeData[]
     */
    public $bandWidthFeeData;
    protected $_name = [
        'bandWidthFeeData' => 'BandWidthFeeData',
    ];

    public function validate()
    {
        if (\is_array($this->bandWidthFeeData)) {
            Model::validateArray($this->bandWidthFeeData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandWidthFeeData) {
            if (\is_array($this->bandWidthFeeData)) {
                $res['BandWidthFeeData'] = [];
                $n1 = 0;
                foreach ($this->bandWidthFeeData as $item1) {
                    $res['BandWidthFeeData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BandWidthFeeData'])) {
            if (!empty($map['BandWidthFeeData'])) {
                $model->bandWidthFeeData = [];
                $n1 = 0;
                foreach ($map['BandWidthFeeData'] as $item1) {
                    $model->bandWidthFeeData[$n1] = bandWidthFeeData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
