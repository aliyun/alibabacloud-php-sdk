<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas;
use AlibabaCloud\Tea\Model;

class DescribeMultiContainerGroupMetricResponseBody extends Model
{
    /**
     * @description The monitoring data of the elastic container instances.
     *
     * @var monitorDatas[]
     */
    public $monitorDatas;

    /**
     * @description The request ID.
     *
     * @example B8756BA0-6452-419C-9727-37A6209C85E0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorDatas' => 'MonitorDatas',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorDatas) {
            $res['MonitorDatas'] = [];
            if (null !== $this->monitorDatas && \is_array($this->monitorDatas)) {
                $n = 0;
                foreach ($this->monitorDatas as $item) {
                    $res['MonitorDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMultiContainerGroupMetricResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorDatas'])) {
            if (!empty($map['MonitorDatas'])) {
                $model->monitorDatas = [];
                $n                   = 0;
                foreach ($map['MonitorDatas'] as $item) {
                    $model->monitorDatas[$n++] = null !== $item ? monitorDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
