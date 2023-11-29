<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DataExtraInfoSubCondsValue extends Model
{
    /**
     * @example tenant_name
     *
     * @var string
     */
    public $tenantName;

    /**
     * @example db_name
     *
     * @var string
     */
    public $database;

    /**
     * @example dest_db
     *
     * @var string
     */
    public $destDatabase;

    /**
     * @example table_name
     *
     * @var string
     */
    public $tableName;

    /**
     * @example dest_name
     *
     * @var string
     */
    public $destName;

    /**
     * @example id>1
     *
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
     * @example null
     *
     * @var string
     */
    public $logicTableId;

    /**
     * @example null
     *
     * @var string
     */
    public $sourceEndpointId;

    /**
     * @example null
     *
     * @var string
     */
    public $sourceClientId;
    protected $_name = [
        'tenantName'       => 'TenantName',
        'database'         => 'Database',
        'destDatabase'     => 'DestDatabase',
        'tableName'        => 'TableName',
        'destName'         => 'DestName',
        'whereClause'      => 'WhereClause',
        'filterColumns'    => 'FilterColumns',
        'shardColumns'     => 'ShardColumns',
        'logicTableId'     => 'LogicTableId',
        'sourceEndpointId' => 'SourceEndpointId',
        'sourceClientId'   => 'SourceClientId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['FilterColumns'] = $this->filterColumns;
        }
        if (null !== $this->shardColumns) {
            $res['ShardColumns'] = $this->shardColumns;
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

    /**
     * @param array $map
     *
     * @return DataExtraInfoSubCondsValue
     */
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
                $model->filterColumns = $map['FilterColumns'];
            }
        }
        if (isset($map['ShardColumns'])) {
            if (!empty($map['ShardColumns'])) {
                $model->shardColumns = $map['ShardColumns'];
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
