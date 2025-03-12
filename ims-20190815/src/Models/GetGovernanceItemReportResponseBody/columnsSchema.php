<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetGovernanceItemReportResponseBody\columnsSchema\columnSchema;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnSchema) {
            $res['ColumnSchema'] = [];
            if (null !== $this->columnSchema && \is_array($this->columnSchema)) {
                $n = 0;
                foreach ($this->columnSchema as $item) {
                    $res['ColumnSchema'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnsSchema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnSchema'])) {
            if (!empty($map['ColumnSchema'])) {
                $model->columnSchema = [];
                $n                   = 0;
                foreach ($map['ColumnSchema'] as $item) {
                    $model->columnSchema[$n++] = null !== $item ? columnSchema::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
