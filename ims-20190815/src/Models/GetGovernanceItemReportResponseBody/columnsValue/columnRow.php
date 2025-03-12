<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody\columnsValue;

use AlibabaCloud\Tea\Model;

class columnRow extends Model
{
    /**
     * @var mixed[]
     */
    public $columnValue;
    protected $_name = [
        'columnValue' => 'ColumnValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnValue) {
            $res['ColumnValue'] = $this->columnValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnRow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnValue'])) {
            if (!empty($map['ColumnValue'])) {
                $model->columnValue = $map['ColumnValue'];
            }
        }

        return $model;
    }
}
