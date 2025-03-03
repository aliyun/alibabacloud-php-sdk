<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsResponseBody\data;

use AlibabaCloud\Dara\Model;

class timeSeries extends Model
{
    /**
     * @var mixed[]
     */
    public $rowData;
    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'rowData' => 'RowData',
        'time'    => 'Time',
    ];

    public function validate()
    {
        if (\is_array($this->rowData)) {
            Model::validateArray($this->rowData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rowData) {
            if (\is_array($this->rowData)) {
                $res['RowData'] = [];
                foreach ($this->rowData as $key1 => $value1) {
                    $res['RowData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['RowData'])) {
            if (!empty($map['RowData'])) {
                $model->rowData = [];
                foreach ($map['RowData'] as $key1 => $value1) {
                    $model->rowData[$key1] = $value1;
                }
            }
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
