<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceDataSourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceDataSourcesResponseBody\data\columns;

class data extends Model
{
    /**
     * @var columns[]
     */
    public $columns;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $schemas;
    /**
     * @var string[]
     */
    public $tables;
    protected $_name = [
        'columns'      => 'Columns',
        'DBInstanceId' => 'DBInstanceId',
        'schemas'      => 'Schemas',
        'tables'       => 'Tables',
    ];

    public function validate()
    {
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1             = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->schemas) {
            $res['Schemas'] = $this->schemas;
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1            = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1++] = $item1;
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
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1             = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1++] = columns::fromMap($item1);
                }
            }
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Schemas'])) {
            $model->schemas = $map['Schemas'];
        }

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1            = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
