<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponseBody\monitorItems;
use AlibabaCloud\Tea\Model;

class DescribeMonitorItemsResponseBody extends Model
{
    /**
     * @description The returned metrics.
     *
     * > *   **memoryUsage**, **GetQps**, and **PutQps** are supported only by ApsaraDB for Redis instances that use Redis 4.0 or later. **GetQps** and **PutQps** require the latest minor version. You can upgrade the major version or minor version of the instance as needed. For more information, see [Upgrade the major version](https://help.aliyun.com/document_detail/101764.html) and [Upgrade the minor version](https://help.aliyun.com/document_detail/56450.html).
     * > *   When you use instances of Redis 2.8, if the **hit_rate** metric is not displayed, you must upgrade the minor version of the instance. For more information, see [Upgrade the minor version](https://help.aliyun.com/document_detail/56450.html).
     * @var monitorItems
     */
    public $monitorItems;

    /**
     * @description The ID of the request.
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
