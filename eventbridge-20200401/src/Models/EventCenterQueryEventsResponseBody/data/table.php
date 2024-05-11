<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsResponseBody\data;

use AlibabaCloud\Tea\Model;

class table extends Model
{
    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $rowData;
    protected $_name = [
        'rowData' => 'RowData',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return table
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RowData'])) {
            $model->rowData = $map['RowData'];
        }

        return $model;
    }
}
