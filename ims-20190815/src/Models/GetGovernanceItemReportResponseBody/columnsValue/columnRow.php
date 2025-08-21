<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody\columnsValue;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->columnValue)) {
            Model::validateArray($this->columnValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnValue) {
            if (\is_array($this->columnValue)) {
                $res['ColumnValue'] = [];
                $n1 = 0;
                foreach ($this->columnValue as $item1) {
                    $res['ColumnValue'][$n1] = $item1;
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
        if (isset($map['ColumnValue'])) {
            if (!empty($map['ColumnValue'])) {
                $model->columnValue = [];
                $n1 = 0;
                foreach ($map['ColumnValue'] as $item1) {
                    $model->columnValue[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
