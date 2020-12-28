<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataResponseBody\monitorData;
use AlibabaCloud\Tea\Model;

class DescribeEniMonitorDataResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var monitorData[]
     */
    public $monitorData;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'requestId'   => 'RequestId',
        'monitorData' => 'MonitorData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
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
     * @return DescribeEniMonitorDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
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
