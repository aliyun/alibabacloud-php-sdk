<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponseBody\monitorData;
use AlibabaCloud\Tea\Model;

class DescribeInstanceMonitorDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var monitorData[]
     */
    public $monitorData;
    protected $_name = [
        'requestId'   => 'RequestId',
        'monitorData' => 'MonitorData',
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
        if (null !== $this->monitorData) {
            $res['MonitorData'] = [];
            if (null !== $this->monitorData && \is_array($this->monitorData)) {
                $n = 0;
                foreach ($this->monitorData as $item) {
                    $res['MonitorData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceMonitorDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MonitorData'])) {
            if (!empty($map['MonitorData'])) {
                $model->monitorData = [];
                $n                  = 0;
                foreach ($map['MonitorData'] as $item) {
                    $model->monitorData[$n++] = null !== $item ? monitorData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
