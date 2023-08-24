<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponseBody\monitorItems;
use AlibabaCloud\Tea\Model;

class DescribeMonitorItemsResponseBody extends Model
{
    /**
     * @description The unit of the metric.
     *
     * @var monitorItems
     */
    public $monitorItems;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeMonitorItems**.
     *
     * @example 8BEB2618-9517-43F3-A233-E0B34512****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorItems' => 'MonitorItems',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorItems) {
            $res['MonitorItems'] = null !== $this->monitorItems ? $this->monitorItems->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitorItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorItems'])) {
            $model->monitorItems = monitorItems::fromMap($map['MonitorItems']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
