<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponseBody\metricLogs;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->metricLogs) {
            $this->metricLogs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricLogs) {
            $res['MetricLogs'] = null !== $this->metricLogs ? $this->metricLogs->toArray($noStream) : $this->metricLogs;
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
        if (isset($map['MetricLogs'])) {
            $model->metricLogs = metricLogs::fromMap($map['MetricLogs']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
