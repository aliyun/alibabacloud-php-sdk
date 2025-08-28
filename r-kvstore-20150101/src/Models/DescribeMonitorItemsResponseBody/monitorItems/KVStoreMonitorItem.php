<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponseBody\monitorItems;

use AlibabaCloud\Dara\Model;

class KVStoreMonitorItem extends Model
{
    /**
     * @var string
     */
    public $monitorKey;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'monitorKey' => 'MonitorKey',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitorKey) {
            $res['MonitorKey'] = $this->monitorKey;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['MonitorKey'])) {
            $model->monitorKey = $map['MonitorKey'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
