<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody\columnsSchema\columnSchema;

class columnsSchema extends Model
{
    /**
     * @var columnSchema[]
     */
    public $columnSchema;
    protected $_name = [
        'columnSchema' => 'ColumnSchema',
    ];

    public function validate()
    {
        if (\is_array($this->columnSchema)) {
            Model::validateArray($this->columnSchema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnSchema) {
            if (\is_array($this->columnSchema)) {
                $res['ColumnSchema'] = [];
                $n1 = 0;
                foreach ($this->columnSchema as $item1) {
                    $res['ColumnSchema'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ColumnSchema'])) {
            if (!empty($map['ColumnSchema'])) {
                $model->columnSchema = [];
                $n1 = 0;
                foreach ($map['ColumnSchema'] as $item1) {
                    $model->columnSchema[$n1] = columnSchema::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
