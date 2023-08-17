<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisMonitorPerformanceResponseBody\performances;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosisMonitorPerformanceResponseBody extends Model
{
    /**
     * @description The monitoring information of queries displayed in Gantt charts.
     *
     * @var performances[]
     */
    public $performances;

    /**
     * @description The threshold for the number of queries displayed in a Gantt chart. The default value is 10000.
     *
     * >  A maximum of 10,000 queries can be displayed in a Gantt chart even if more queries exist.
     * @example 10000
     *
     * @var int
     */
    public $performancesThreshold;

    /**
     * @description Indicates whether all queries are returned. Valid values:
     *
     *   true: All queries are returned.
     *   false: Only a specified number of queries are returned.
     *
     * @example false
     *
     * @var bool
     */
    public $performancesTruncated;

    /**
     * @description The ID of the request.
     *
     * @example 0F1AC5FD-16E9-5399-B81F-5AC434B1D9F8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'performances'          => 'Performances',
        'performancesThreshold' => 'PerformancesThreshold',
        'performancesTruncated' => 'PerformancesTruncated',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->performances) {
            $res['Performances'] = [];
            if (null !== $this->performances && \is_array($this->performances)) {
                $n = 0;
                foreach ($this->performances as $item) {
                    $res['Performances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->performancesThreshold) {
            $res['PerformancesThreshold'] = $this->performancesThreshold;
        }
        if (null !== $this->performancesTruncated) {
            $res['PerformancesTruncated'] = $this->performancesTruncated;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisMonitorPerformanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Performances'])) {
            if (!empty($map['Performances'])) {
                $model->performances = [];
                $n                   = 0;
                foreach ($map['Performances'] as $item) {
                    $model->performances[$n++] = null !== $item ? performances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PerformancesThreshold'])) {
            $model->performancesThreshold = $map['PerformancesThreshold'];
        }
        if (isset($map['PerformancesTruncated'])) {
            $model->performancesTruncated = $map['PerformancesTruncated'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
