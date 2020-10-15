<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponse\measurementDatas;
use AlibabaCloud\Tea\Model;

class DescribeMeasurementDataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var measurementDatas
     */
    public $measurementDatas;
    protected $_name = [
        'requestId'        => 'RequestId',
        'measurementDatas' => 'MeasurementDatas',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('measurementDatas', $this->measurementDatas, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->measurementDatas) {
            $res['MeasurementDatas'] = null !== $this->measurementDatas ? $this->measurementDatas->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMeasurementDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MeasurementDatas'])) {
            $model->measurementDatas = measurementDatas::fromMap($map['MeasurementDatas']);
        }

        return $model;
    }
}
