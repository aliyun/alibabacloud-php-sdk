<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponseBody\metricLogs;
use AlibabaCloud\Tea\Model;

class GetCloudMetricLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var metricLogs[]
     */
    public $metricLogs;
    protected $_name = [
        'requestId'  => 'RequestId',
        'metricLogs' => 'MetricLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->metricLogs) {
            $res['MetricLogs'] = [];
            if (null !== $this->metricLogs && \is_array($this->metricLogs)) {
                $n = 0;
                foreach ($this->metricLogs as $item) {
                    $res['MetricLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudMetricLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MetricLogs'])) {
            if (!empty($map['MetricLogs'])) {
                $model->metricLogs = [];
                $n                 = 0;
                foreach ($map['MetricLogs'] as $item) {
                    $model->metricLogs[$n++] = null !== $item ? metricLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
