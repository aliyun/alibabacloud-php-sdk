<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class UpdateMmsTablesRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dstProjectName;

    /**
     * @var string
     */
    public $dstSchemaName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tableNames;

    /**
     * @var int[]
     */
    public $tables;
    protected $_name = [
        'dbName' => 'dbName',
        'dstProjectName' => 'dstProjectName',
        'dstSchemaName' => 'dstSchemaName',
        'status' => 'status',
        'tableNames' => 'tableNames',
        'tables' => 'tables',
    ];

    public function validate()
    {
        if (\is_array($this->tableNames)) {
            Model::validateArray($this->tableNames);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        if (null !== $this->dstProjectName) {
            $res['dstProjectName'] = $this->dstProjectName;
        }

        if (null !== $this->dstSchemaName) {
            $res['dstSchemaName'] = $this->dstSchemaName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tableNames) {
            if (\is_array($this->tableNames)) {
                $res['tableNames'] = [];
                $n1 = 0;
                foreach ($this->tableNames as $item1) {
                    $res['tableNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['tables'][$n1] = $item1;
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
        if (isset($map['dbName'])) {
            $model->dbName = $map['dbName'];
        }

        if (isset($map['dstProjectName'])) {
            $model->dstProjectName = $map['dstProjectName'];
        }

        if (isset($map['dstSchemaName'])) {
            $model->dstSchemaName = $map['dstSchemaName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tableNames'])) {
            if (!empty($map['tableNames'])) {
                $model->tableNames = [];
                $n1 = 0;
                foreach ($map['tableNames'] as $item1) {
                    $model->tableNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tables'])) {
            if (!empty($map['tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['tables'] as $item1) {
                    $model->tables[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
