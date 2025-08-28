<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponseBody\monitorItems;

class DescribeMonitorItemsResponseBody extends Model
{
    /**
     * @var monitorItems
     */
    public $monitorItems;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'monitorItems' => 'MonitorItems',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->monitorItems) {
            $this->monitorItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitorItems) {
            $res['MonitorItems'] = null !== $this->monitorItems ? $this->monitorItems->toArray($noStream) : $this->monitorItems;
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
        if (isset($map['MonitorItems'])) {
            $model->monitorItems = monitorItems::fromMap($map['MonitorItems']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
