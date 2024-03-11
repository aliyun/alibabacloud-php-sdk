<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisOverallDataResponseBody\metricData;
use AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisOverallDataResponseBody\overallData;
use AlibabaCloud\Tea\Model;

class DescribeFaultDiagnosisOverallDataResponseBody extends Model
{
    /**
     * @var metricData
     */
    public $metricData;

    /**
     * @var overallData
     */
    public $overallData;

    /**
     * @example 1C24B3B5-E41A-45CE-844D-D3C578B97AA6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metricData'  => 'MetricData',
        'overallData' => 'OverallData',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricData) {
            $res['MetricData'] = null !== $this->metricData ? $this->metricData->toMap() : null;
        }
        if (null !== $this->overallData) {
            $res['OverallData'] = null !== $this->overallData ? $this->overallData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaultDiagnosisOverallDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricData'])) {
            $model->metricData = metricData::fromMap($map['MetricData']);
        }
        if (isset($map['OverallData'])) {
            $model->overallData = overallData::fromMap($map['OverallData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
