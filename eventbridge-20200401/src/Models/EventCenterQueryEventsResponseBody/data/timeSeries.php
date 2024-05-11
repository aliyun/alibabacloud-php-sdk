<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsResponseBody\data;

use AlibabaCloud\Tea\Model;

class timeSeries extends Model
{
    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $rowData;

    /**
     * @example 1683561600000
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'rowData' => 'RowData',
        'time'    => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rowData) {
            $res['RowData'] = $this->rowData;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeSeries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RowData'])) {
            $model->rowData = $map['RowData'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
