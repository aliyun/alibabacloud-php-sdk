<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DataExtraInfoSubCondsValue extends Model
{
    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $destDatabase;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $destName;

    /**
     * @var string
     */
    public $whereClause;

    /**
     * @var string[]
     */
    public $filterColumns;

    /**
     * @var string[]
     */
    public $shardColumns;

    /**
     * @var string
     */
    public $logicTableId;

    /**
     * @var string
     */
    public $sourceEndpointId;

    /**
     * @var string
     */
    public $sourceClientId;
    protected $_name = [
        'tenantName' => 'TenantName',
        'database' => 'Database',
        'destDatabase' => 'DestDatabase',
        'tableName' => 'TableName',
        'destName' => 'DestName',
        'whereClause' => 'WhereClause',
        'filterColumns' => 'FilterColumns',
        'shardColumns' => 'ShardColumns',
        'logicTableId' => 'LogicTableId',
        'sourceEndpointId' => 'SourceEndpointId',
        'sourceClientId' => 'SourceClientId',
    ];

    public function validate()
    {
        if (\is_array($this->filterColumns)) {
            Model::validateArray($this->filterColumns);
        }
        if (\is_array($this->shardColumns)) {
            Model::validateArray($this->shardColumns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->destDatabase) {
            $res['DestDatabase'] = $this->destDatabase;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->destName) {
            $res['DestName'] = $this->destName;
        }

        if (null !== $this->whereClause) {
            $res['WhereClause'] = $this->whereClause;
        }

        if (null !== $this->filterColumns) {
            if (\is_array($this->filterColumns)) {
                $res['FilterColumns'] = [];
                $n1 = 0;
                foreach ($this->filterColumns as $item1) {
                    $res['FilterColumns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shardColumns) {
            if (\is_array($this->shardColumns)) {
                $res['ShardColumns'] = [];
                $n1 = 0;
                foreach ($this->shardColumns as $item1) {
                    $res['ShardColumns'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logicTableId) {
            $res['LogicTableId'] = $this->logicTableId;
        }

        if (null !== $this->sourceEndpointId) {
            $res['SourceEndpointId'] = $this->sourceEndpointId;
        }

        if (null !== $this->sourceClientId) {
            $res['SourceClientId'] = $this->sourceClientId;
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
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['DestDatabase'])) {
            $model->destDatabase = $map['DestDatabase'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['DestName'])) {
            $model->destName = $map['DestName'];
        }

        if (isset($map['WhereClause'])) {
            $model->whereClause = $map['WhereClause'];
        }

        if (isset($map['FilterColumns'])) {
            if (!empty($map['FilterColumns'])) {
                $model->filterColumns = [];
                $n1 = 0;
                foreach ($map['FilterColumns'] as $item1) {
                    $model->filterColumns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ShardColumns'])) {
            if (!empty($map['ShardColumns'])) {
                $model->shardColumns = [];
                $n1 = 0;
                foreach ($map['ShardColumns'] as $item1) {
                    $model->shardColumns[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LogicTableId'])) {
            $model->logicTableId = $map['LogicTableId'];
        }

        if (isset($map['SourceEndpointId'])) {
            $model->sourceEndpointId = $map['SourceEndpointId'];
        }

        if (isset($map['SourceClientId'])) {
            $model->sourceClientId = $map['SourceClientId'];
        }

        return $model;
    }
}
