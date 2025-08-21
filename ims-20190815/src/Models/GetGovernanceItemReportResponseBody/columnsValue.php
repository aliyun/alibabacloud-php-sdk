<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody\columnsValue\columnRow;

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
        if (\is_array($this->columnRow)) {
            Model::validateArray($this->columnRow);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnRow) {
            if (\is_array($this->columnRow)) {
                $res['ColumnRow'] = [];
                $n1 = 0;
                foreach ($this->columnRow as $item1) {
                    $res['ColumnRow'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ColumnRow'])) {
            if (!empty($map['ColumnRow'])) {
                $model->columnRow = [];
                $n1 = 0;
                foreach ($map['ColumnRow'] as $item1) {
                    $model->columnRow[$n1] = columnRow::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
