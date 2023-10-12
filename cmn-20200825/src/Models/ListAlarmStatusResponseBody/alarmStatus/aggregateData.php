<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\Tea\Model;

class aggregateData extends Model
{
    /**
     * @example avg_latency_avg
     *
     * @var string
     */
    public $aggregateDataName;

    /**
     * @example avg_latency
     *
     * @var string
     */
    public $dataItem;
    protected $_name = [
        'aggregateDataName' => 'AggregateDataName',
        'dataItem'          => 'DataItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregateDataName) {
            $res['AggregateDataName'] = $this->aggregateDataName;
        }
        if (null !== $this->dataItem) {
            $res['DataItem'] = $this->dataItem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregateData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateDataName'])) {
            $model->aggregateDataName = $map['AggregateDataName'];
        }
        if (isset($map['DataItem'])) {
            $model->dataItem = $map['DataItem'];
        }

        return $model;
    }
}
