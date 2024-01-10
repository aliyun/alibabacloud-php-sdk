<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data;

use AlibabaCloud\Tea\Model;

class tableEtlList extends Model
{
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
     * @example dest_name
     *
     * @var string
     */
    public $destName;

    /**
     * @var string[]
     */
    public $filterColumns;

    /**
     * @example null
     *
     * @var string
     */
    public $logicTableId;

    /**
     * @var string[]
     */
    public $shardColumns;

    /**
     * @example null
     *
     * @var string
     */
    public $sourceEndpointId;

    /**
     * @example table_name
     *
     * @var string
     */
    public $tableName;

    /**
     * @example tenant_name
     *
     * @var string
     */
    public $tenantName;

    /**
     * @example id>1
     *
     * @var string
     */
    public $whereClause;
    protected $_name = [
        'database'         => 'Database',
        'destDatabase'     => 'DestDatabase',
        'destName'         => 'DestName',
        'filterColumns'    => 'FilterColumns',
        'logicTableId'     => 'LogicTableId',
        'shardColumns'     => 'ShardColumns',
        'sourceEndpointId' => 'SourceEndpointId',
        'tableName'        => 'TableName',
        'tenantName'       => 'TenantName',
        'whereClause'      => 'WhereClause',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->destDatabase) {
            $res['DestDatabase'] = $this->destDatabase;
        }
        if (null !== $this->destName) {
            $res['DestName'] = $this->destName;
        }
        if (null !== $this->filterColumns) {
            $res['FilterColumns'] = $this->filterColumns;
        }
        if (null !== $this->logicTableId) {
            $res['LogicTableId'] = $this->logicTableId;
        }
        if (null !== $this->shardColumns) {
            $res['ShardColumns'] = $this->shardColumns;
        }
        if (null !== $this->sourceEndpointId) {
            $res['SourceEndpointId'] = $this->sourceEndpointId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->whereClause) {
            $res['WhereClause'] = $this->whereClause;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableEtlList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['DestDatabase'])) {
            $model->destDatabase = $map['DestDatabase'];
        }
        if (isset($map['DestName'])) {
            $model->destName = $map['DestName'];
        }
        if (isset($map['FilterColumns'])) {
            if (!empty($map['FilterColumns'])) {
                $model->filterColumns = $map['FilterColumns'];
            }
        }
        if (isset($map['LogicTableId'])) {
            $model->logicTableId = $map['LogicTableId'];
        }
        if (isset($map['ShardColumns'])) {
            if (!empty($map['ShardColumns'])) {
                $model->shardColumns = $map['ShardColumns'];
            }
        }
        if (isset($map['SourceEndpointId'])) {
            $model->sourceEndpointId = $map['SourceEndpointId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['WhereClause'])) {
            $model->whereClause = $map['WhereClause'];
        }

        return $model;
    }
}
