<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Schema extends Model
{
    /**
     * @var TableColumn[]
     */
    public $columns;

    /**
     * @var PrimaryKey[]
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
        if (null !== $this->primaryKey) {
            $res['primaryKey'] = [];
            if (null !== $this->primaryKey && \is_array($this->primaryKey)) {
                $n = 0;
                foreach ($this->primaryKey as $item) {
                    $res['primaryKey'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->watermarkSpecs) {
            $res['watermarkSpecs'] = [];
            if (null !== $this->watermarkSpecs && \is_array($this->watermarkSpecs)) {
                $n = 0;
                foreach ($this->watermarkSpecs as $item) {
                    $res['watermarkSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Schema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columns'])) {
            if (!empty($map['columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? TableColumn::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['primaryKey'])) {
            if (!empty($map['primaryKey'])) {
                $model->primaryKey = [];
                $n                 = 0;
                foreach ($map['primaryKey'] as $item) {
                    $model->primaryKey[$n++] = null !== $item ? PrimaryKey::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['watermarkSpecs'])) {
            if (!empty($map['watermarkSpecs'])) {
                $model->watermarkSpecs = [];
                $n                     = 0;
                foreach ($map['watermarkSpecs'] as $item) {
                    $model->watermarkSpecs[$n++] = null !== $item ? WatermarkSpec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
