<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponseBody\metricLogs\metricLog;

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
        if (\is_array($this->metricLog)) {
            Model::validateArray($this->metricLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricLog) {
            if (\is_array($this->metricLog)) {
                $res['MetricLog'] = [];
                $n1 = 0;
                foreach ($this->metricLog as $item1) {
                    $res['MetricLog'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['MetricLog'])) {
            if (!empty($map['MetricLog'])) {
                $model->metricLog = [];
                $n1 = 0;
                foreach ($map['MetricLog'] as $item1) {
                    $model->metricLog[$n1++] = metricLog::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
