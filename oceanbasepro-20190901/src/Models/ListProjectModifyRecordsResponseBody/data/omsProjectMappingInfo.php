<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo\columnMappings;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo\schemaMappings;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo\tableMappings;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo\viewMappings;
use AlibabaCloud\Tea\Model;

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
        'tableMappings'  => 'TableMappings',
        'viewMappings'   => 'ViewMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnMappings) {
            $res['ColumnMappings'] = [];
            if (null !== $this->columnMappings && \is_array($this->columnMappings)) {
                $n = 0;
                foreach ($this->columnMappings as $item) {
                    $res['ColumnMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->schemaMappings) {
            $res['SchemaMappings'] = [];
            if (null !== $this->schemaMappings && \is_array($this->schemaMappings)) {
                $n = 0;
                foreach ($this->schemaMappings as $item) {
                    $res['SchemaMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableMappings) {
            $res['TableMappings'] = [];
            if (null !== $this->tableMappings && \is_array($this->tableMappings)) {
                $n = 0;
                foreach ($this->tableMappings as $item) {
                    $res['TableMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->viewMappings) {
            $res['ViewMappings'] = [];
            if (null !== $this->viewMappings && \is_array($this->viewMappings)) {
                $n = 0;
                foreach ($this->viewMappings as $item) {
                    $res['ViewMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return omsProjectMappingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnMappings'])) {
            if (!empty($map['ColumnMappings'])) {
                $model->columnMappings = [];
                $n                     = 0;
                foreach ($map['ColumnMappings'] as $item) {
                    $model->columnMappings[$n++] = null !== $item ? columnMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SchemaMappings'])) {
            if (!empty($map['SchemaMappings'])) {
                $model->schemaMappings = [];
                $n                     = 0;
                foreach ($map['SchemaMappings'] as $item) {
                    $model->schemaMappings[$n++] = null !== $item ? schemaMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableMappings'])) {
            if (!empty($map['TableMappings'])) {
                $model->tableMappings = [];
                $n                    = 0;
                foreach ($map['TableMappings'] as $item) {
                    $model->tableMappings[$n++] = null !== $item ? tableMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ViewMappings'])) {
            if (!empty($map['ViewMappings'])) {
                $model->viewMappings = [];
                $n                   = 0;
                foreach ($map['ViewMappings'] as $item) {
                    $model->viewMappings[$n++] = null !== $item ? viewMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
