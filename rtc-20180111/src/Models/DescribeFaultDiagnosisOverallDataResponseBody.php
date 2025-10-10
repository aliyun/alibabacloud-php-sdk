<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisOverallDataResponseBody\metricData;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisOverallDataResponseBody\overallData;

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
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metricData' => 'MetricData',
        'overallData' => 'OverallData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->metricData) {
            $this->metricData->validate();
        }
        if (null !== $this->overallData) {
            $this->overallData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricData) {
            $res['MetricData'] = null !== $this->metricData ? $this->metricData->toArray($noStream) : $this->metricData;
        }

        if (null !== $this->overallData) {
            $res['OverallData'] = null !== $this->overallData ? $this->overallData->toArray($noStream) : $this->overallData;
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
