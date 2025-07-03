<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo\columnMappings;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo\schemaMappings;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo\tableMappings;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo\viewMappings;

class omsProjectMappingInfo extends Model
{
    /**
     * @var columnMappings[]
     */
    public $columnMappings;

    /**
     * @var schemaMappings[]
     */
    public $schemaMappings;

    /**
     * @var tableMappings[]
     */
    public $tableMappings;

    /**
     * @var viewMappings[]
     */
    public $viewMappings;
    protected $_name = [
        'columnMappings' => 'ColumnMappings',
        'schemaMappings' => 'SchemaMappings',
        'tableMappings' => 'TableMappings',
        'viewMappings' => 'ViewMappings',
    ];

    public function validate()
    {
        if (\is_array($this->columnMappings)) {
            Model::validateArray($this->columnMappings);
        }
        if (\is_array($this->schemaMappings)) {
            Model::validateArray($this->schemaMappings);
        }
        if (\is_array($this->tableMappings)) {
            Model::validateArray($this->tableMappings);
        }
        if (\is_array($this->viewMappings)) {
            Model::validateArray($this->viewMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnMappings) {
            if (\is_array($this->columnMappings)) {
                $res['ColumnMappings'] = [];
                $n1 = 0;
                foreach ($this->columnMappings as $item1) {
                    $res['ColumnMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->schemaMappings) {
            if (\is_array($this->schemaMappings)) {
                $res['SchemaMappings'] = [];
                $n1 = 0;
                foreach ($this->schemaMappings as $item1) {
                    $res['SchemaMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableMappings) {
            if (\is_array($this->tableMappings)) {
                $res['TableMappings'] = [];
                $n1 = 0;
                foreach ($this->tableMappings as $item1) {
                    $res['TableMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->viewMappings) {
            if (\is_array($this->viewMappings)) {
                $res['ViewMappings'] = [];
                $n1 = 0;
                foreach ($this->viewMappings as $item1) {
                    $res['ViewMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ColumnMappings'])) {
            if (!empty($map['ColumnMappings'])) {
                $model->columnMappings = [];
                $n1 = 0;
                foreach ($map['ColumnMappings'] as $item1) {
                    $model->columnMappings[$n1] = columnMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SchemaMappings'])) {
            if (!empty($map['SchemaMappings'])) {
                $model->schemaMappings = [];
                $n1 = 0;
                foreach ($map['SchemaMappings'] as $item1) {
                    $model->schemaMappings[$n1] = schemaMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TableMappings'])) {
            if (!empty($map['TableMappings'])) {
                $model->tableMappings = [];
                $n1 = 0;
                foreach ($map['TableMappings'] as $item1) {
                    $model->tableMappings[$n1] = tableMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ViewMappings'])) {
            if (!empty($map['ViewMappings'])) {
                $model->viewMappings = [];
                $n1 = 0;
                foreach ($map['ViewMappings'] as $item1) {
                    $model->viewMappings[$n1] = viewMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
