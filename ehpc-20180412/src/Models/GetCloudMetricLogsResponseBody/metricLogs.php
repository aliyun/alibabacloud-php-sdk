<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponseBody\metricLogs\metricLog;
use AlibabaCloud\Tea\Model;

class metricLogs extends Model
{
    /**
     * @var metricLog[]
     */
    public $metricLog;
    protected $_name = [
        'metricLog' => 'MetricLog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricLog) {
            $res['MetricLog'] = [];
            if (null !== $this->metricLog && \is_array($this->metricLog)) {
                $n = 0;
                foreach ($this->metricLog as $item) {
                    $res['MetricLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricLog'])) {
            if (!empty($map['MetricLog'])) {
                $model->metricLog = [];
                $n                = 0;
                foreach ($map['MetricLog'] as $item) {
                    $model->metricLog[$n++] = null !== $item ? metricLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
