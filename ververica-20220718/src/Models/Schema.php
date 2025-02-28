<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Schema extends Model
{
    /**
     * @var TableColumn[]
     */
    public $columns;
    /**
     * @var PrimaryKey
     */
    public $primaryKey;
    /**
     * @var WatermarkSpec[]
     */
    public $watermarkSpecs;
    protected $_name = [
        'columns'        => 'columns',
        'primaryKey'     => 'primaryKey',
        'watermarkSpecs' => 'watermarkSpecs',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (null !== $this->primaryKey) {
            $this->primaryKey->validate();
        }
        if (\is_array($this->watermarkSpecs)) {
            Model::validateArray($this->watermarkSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['columns'] = [];
                $n1             = 0;
                foreach ($this->columns as $item1) {
                    $res['columns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->primaryKey) {
            $res['primaryKey'] = null !== $this->primaryKey ? $this->primaryKey->toArray($noStream) : $this->primaryKey;
        }

        if (null !== $this->watermarkSpecs) {
            if (\is_array($this->watermarkSpecs)) {
                $res['watermarkSpecs'] = [];
                $n1                    = 0;
                foreach ($this->watermarkSpecs as $item1) {
                    $res['watermarkSpecs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1             = 0;
                foreach ($map['columns'] as $item1) {
                    $model->columns[$n1++] = TableColumn::fromMap($item1);
                }
            }
        }

        if (isset($map['primaryKey'])) {
            $model->primaryKey = PrimaryKey::fromMap($map['primaryKey']);
        }

        if (isset($map['watermarkSpecs'])) {
            if (!empty($map['watermarkSpecs'])) {
                $model->watermarkSpecs = [];
                $n1                    = 0;
                foreach ($map['watermarkSpecs'] as $item1) {
                    $model->watermarkSpecs[$n1++] = WatermarkSpec::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
