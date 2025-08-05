<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data\sourceMySQLDiscovery;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\DiscoverEventSourceResponseBody\data\sourceMySQLDiscovery\tableSchema\columns;
use AlibabaCloud\Tea\Model;

class tableSchema extends Model
{
    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @example map
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'columns' => 'Columns',
        'tableName' => 'TableName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableSchema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
