<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeMonitorItemsResponseBody\monitorItems;

use AlibabaCloud\Tea\Model;

class KVStoreMonitorItem extends Model
{
    /**
     * @description The metric.
     *
     * @example select
     *
     * @var string
     */
    public $monitorKey;

    /**
     * @description The unit of the metric.
     *
     * @example Counts/s
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'monitorKey' => 'MonitorKey',
        'unit'       => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return KVStoreMonitorItem
     */
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
