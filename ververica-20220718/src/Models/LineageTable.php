<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class LineageTable extends Model
{
    /**
     * @var LineageColumn[]
     */
    public $columns;

    /**
     * @var string
     */
    public $id;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var mixed[]
     */
    public $with;
    protected $_name = [
        'columns'    => 'columns',
        'id'         => 'id',
        'properties' => 'properties',
        'tableName'  => 'tableName',
        'with'       => 'with',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }
        if (null !== $this->with) {
            $res['with'] = $this->with;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LineageTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? LineageColumn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }
        if (isset($map['with'])) {
            $model->with = $map['with'];
        }

        return $model;
    }
}
