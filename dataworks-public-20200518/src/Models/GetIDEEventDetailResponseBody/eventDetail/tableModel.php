<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\tableModel\columns;

class tableModel extends Model
{
    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $lifeCycle;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'columns' => 'Columns',
        'comment' => 'Comment',
        'dataSourceName' => 'DataSourceName',
        'env' => 'Env',
        'lifeCycle' => 'LifeCycle',
        'location' => 'Location',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1 = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1 = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1++] = columns::fromMap($item1);
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
