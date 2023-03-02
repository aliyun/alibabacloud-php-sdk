<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\tableModel\columns;
use AlibabaCloud\Tea\Model;

class tableModel extends Model
{
    /**
     * @description The columns in the table.
     *
     * @var columns[]
     */
    public $columns;

    /**
     * @description The description of the table.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The name of the compute engine instance to which the table belongs.
     *
     * @example odps_first
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The environment in which the table is used. Valid values:
     *
     * - PROD: production environment
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @description The lifecycle of the table. Unit: days.
     *
     * @example 7
     *
     * @var int
     */
    public $lifeCycle;

    /**
     * @description The path of the table.
     *
     * @example hdfs://path/to/object
     *
     * @var string
     */
    public $location;

    /**
     * @description The name of the table.
     *
     * @example tb_hello
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'columns'        => 'Columns',
        'comment'        => 'Comment',
        'dataSourceName' => 'DataSourceName',
        'env'            => 'Env',
        'lifeCycle'      => 'LifeCycle',
        'location'       => 'Location',
        'tableName'      => 'TableName',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->lifeCycle) {
            $res['LifeCycle'] = $this->lifeCycle;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['LifeCycle'])) {
            $model->lifeCycle = $map['LifeCycle'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
