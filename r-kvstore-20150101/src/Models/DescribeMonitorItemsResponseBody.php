<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponseBody\monitorItems;
use AlibabaCloud\Tea\Model;

class DescribeMonitorItemsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var monitorItems
     */
    public $monitorItems;
    protected $_name = [
        'requestId'    => 'RequestId',
        'monitorItems' => 'MonitorItems',
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
        if (null !== $this->monitorItems) {
            $res['MonitorItems'] = null !== $this->monitorItems ? $this->monitorItems->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MonitorItems'])) {
            $model->monitorItems = monitorItems::fromMap($map['MonitorItems']);
        }

        return $model;
    }
}
