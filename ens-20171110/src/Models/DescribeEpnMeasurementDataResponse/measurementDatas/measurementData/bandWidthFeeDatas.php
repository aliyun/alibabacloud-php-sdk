<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponse\measurementDatas\measurementData;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponse\measurementDatas\measurementData\bandWidthFeeDatas\bandWidthFeeData;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('bandWidthFeeData', $this->bandWidthFeeData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandWidthFeeData) {
            $res['BandWidthFeeData'] = [];
            if (null !== $this->bandWidthFeeData && \is_array($this->bandWidthFeeData)) {
                $n = 0;
                foreach ($this->bandWidthFeeData as $item) {
                    $res['BandWidthFeeData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandWidthFeeDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandWidthFeeData'])) {
            if (!empty($map['BandWidthFeeData'])) {
                $model->bandWidthFeeData = [];
                $n                       = 0;
                foreach ($map['BandWidthFeeData'] as $item) {
                    $model->bandWidthFeeData[$n++] = null !== $item ? bandWidthFeeData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
