<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody\columnsValue\columnRow;
use AlibabaCloud\Tea\Model;

class columnsValue extends Model
{
    /**
     * @var columnRow[]
     */
    public $columnRow;
    protected $_name = [
        'columnRow' => 'ColumnRow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnRow) {
            $res['ColumnRow'] = [];
            if (null !== $this->columnRow && \is_array($this->columnRow)) {
                $n = 0;
                foreach ($this->columnRow as $item) {
                    $res['ColumnRow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnRow'])) {
            if (!empty($map['ColumnRow'])) {
                $model->columnRow = [];
                $n                = 0;
                foreach ($map['ColumnRow'] as $item) {
                    $model->columnRow[$n++] = null !== $item ? columnRow::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
