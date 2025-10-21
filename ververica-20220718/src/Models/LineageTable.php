<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

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
        'columns' => 'columns',
        'id' => 'id',
        'properties' => 'properties',
        'tableName' => 'tableName',
        'with' => 'with',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        if (\is_array($this->with)) {
            Model::validateArray($this->with);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['columns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        if (null !== $this->with) {
            if (\is_array($this->with)) {
                $res['with'] = [];
                foreach ($this->with as $key1 => $value1) {
                    $res['with'][$key1] = $value1;
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
        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['columns'] as $item1) {
                    $model->columns[$n1] = LineageColumn::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                foreach ($map['properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        if (isset($map['with'])) {
            if (!empty($map['with'])) {
                $model->with = [];
                foreach ($map['with'] as $key1 => $value1) {
                    $model->with[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
