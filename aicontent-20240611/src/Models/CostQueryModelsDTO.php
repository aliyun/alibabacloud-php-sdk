<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class CostQueryModelsDTO extends Model
{
    /**
     * @var MetricDefRespDTO[]
     */
    public $columns;

    /**
     * @var string
     */
    public $idField;

    /**
     * @var string
     */
    public $nameField;

    /**
     * @var ModelRowDTO[]
     */
    public $rows;
    protected $_name = [
        'columns' => 'columns',
        'idField' => 'idField',
        'nameField' => 'nameField',
        'rows' => 'rows',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->rows)) {
            Model::validateArray($this->rows);
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

        if (null !== $this->idField) {
            $res['idField'] = $this->idField;
        }

        if (null !== $this->nameField) {
            $res['nameField'] = $this->nameField;
        }

        if (null !== $this->rows) {
            if (\is_array($this->rows)) {
                $res['rows'] = [];
                $n1 = 0;
                foreach ($this->rows as $item1) {
                    $res['rows'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['columns'] as $item1) {
                    $model->columns[$n1] = MetricDefRespDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['idField'])) {
            $model->idField = $map['idField'];
        }

        if (isset($map['nameField'])) {
            $model->nameField = $map['nameField'];
        }

        if (isset($map['rows'])) {
            if (!empty($map['rows'])) {
                $model->rows = [];
                $n1 = 0;
                foreach ($map['rows'] as $item1) {
                    $model->rows[$n1] = ModelRowDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
