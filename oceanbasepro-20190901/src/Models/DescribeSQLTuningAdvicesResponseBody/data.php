<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLTuningAdvicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLTuningAdvicesResponseBody\data\columns;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLTuningAdvicesResponseBody\data\plan;

class data extends Model
{
    /**
     * @var string
     */
    public $columnNames;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $localityType;

    /**
     * @var plan
     */
    public $plan;

    /**
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'columnNames' => 'ColumnNames',
        'columns' => 'Columns',
        'dbName' => 'DbName',
        'localityType' => 'LocalityType',
        'plan' => 'Plan',
        'table' => 'Table',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (null !== $this->plan) {
            $this->plan->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnNames) {
            $res['ColumnNames'] = $this->columnNames;
        }

        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['Plan'] = null !== $this->plan ? $this->plan->toArray($noStream) : $this->plan;
        }

        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ColumnNames'])) {
            $model->columnNames = $map['ColumnNames'];
        }

        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1++] = columns::fromMap($item1);
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
