<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody\measurementDatas;
use AlibabaCloud\Tea\Model;

class DescribeMeasurementDataResponseBody extends Model
{
    /**
     * @var measurementDatas
     */
    public $measurementDatas;

    /**
     * @example 125B04C7-3D0D-4245-AF96-14E3758E3F06
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'measurementDatas' => 'MeasurementDatas',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->measurementDatas) {
            $res['MeasurementDatas'] = null !== $this->measurementDatas ? $this->measurementDatas->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMeasurementDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MeasurementDatas'])) {
            $model->measurementDatas = measurementDatas::fromMap($map['MeasurementDatas']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
