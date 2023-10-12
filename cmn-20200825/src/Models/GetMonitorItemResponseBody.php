<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetMonitorItemResponseBody\monitorItem;
use AlibabaCloud\Tea\Model;

class GetMonitorItemResponseBody extends Model
{
    /**
     * @var monitorItem
     */
    public $monitorItem;

    /**
     * @description Id of the request
     *
     * @example 94EDA8CB-57C7-57F6-9193-26E701348ADB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorItem' => 'MonitorItem',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorItem) {
            $res['MonitorItem'] = null !== $this->monitorItem ? $this->monitorItem->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMonitorItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorItem'])) {
            $model->monitorItem = monitorItem::fromMap($map['MonitorItem']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
