<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponseBody\metricLogs;
use AlibabaCloud\Tea\Model;

class GetCloudMetricLogsResponseBody extends Model
{
    /**
     * @var metricLogs
     */
    public $metricLogs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metricLogs' => 'MetricLogs',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricLogs) {
            $res['MetricLogs'] = null !== $this->metricLogs ? $this->metricLogs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MetricLogs'])) {
            $model->metricLogs = metricLogs::fromMap($map['MetricLogs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
