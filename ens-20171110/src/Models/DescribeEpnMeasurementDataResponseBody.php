<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponseBody\measurementDatas;

class DescribeEpnMeasurementDataResponseBody extends Model
{
    /**
     * @var measurementDatas
     */
    public $measurementDatas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'measurementDatas' => 'MeasurementDatas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->measurementDatas) {
            $this->measurementDatas->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->measurementDatas) {
            $res['MeasurementDatas'] = null !== $this->measurementDatas ? $this->measurementDatas->toArray($noStream) : $this->measurementDatas;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MeasurementDatas'])) {
            $model->measurementDatas = measurementDatas::fromMap($map['MeasurementDatas']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
