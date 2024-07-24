<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLTuningAdvicesResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLTuningAdvicesResponseBody\data\columns;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLTuningAdvicesResponseBody\data\plan;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example c1;c2;c3
     *
     * @var string
     */
    public $columnNames;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @example test_db
     *
     * @var string
     */
    public $dbName;

    /**
     * @example Local/Global
     *
     * @var string
     */
    public $localityType;

    /**
     * @var plan
     */
    public $plan;

    /**
     * @example test_table
     *
     * @var string
     */
    public $table;

    /**
     * @example PLAN_BINDING/INDEX_CREATION
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'columnNames'  => 'ColumnNames',
        'columns'      => 'Columns',
        'dbName'       => 'DbName',
        'localityType' => 'LocalityType',
        'plan'         => 'Plan',
        'table'        => 'Table',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnNames) {
            $res['ColumnNames'] = $this->columnNames;
        }
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->localityType) {
            $res['LocalityType'] = $this->localityType;
        }
        if (null !== $this->plan) {
            $res['Plan'] = null !== $this->plan ? $this->plan->toMap() : null;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnNames'])) {
            $model->columnNames = $map['ColumnNames'];
        }
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['LocalityType'])) {
            $model->localityType = $map['LocalityType'];
        }
        if (isset($map['Plan'])) {
            $model->plan = plan::fromMap($map['Plan']);
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
