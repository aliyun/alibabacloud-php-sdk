<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody\logicTableList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody\logicTableList\logicTable\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody\logicTableList\logicTable\ownerNameList;
use AlibabaCloud\Tea\Model;

class logicTable extends Model
{
    /**
     * @description The ID of the logical database.
     *
     * @example 1
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description Indicates whether the table is a logical table. The value is fixed to true.
     *
     * @example true
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The IDs of the owners of the logical tables.
     *
     * @var ownerIdList
     */
    public $ownerIdList;

    /**
     * @description The nicknames of the owners of the logical tables.
     *
     * @var ownerNameList
     */
    public $ownerNameList;

    /**
     * @description The logical database to which the logical table belongs.
     *
     * @example yuyang_test
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The number of logical tables.
     *
     * @example 4
     *
     * @var string
     */
    public $tableCount;

    /**
     * @description The expression of the logical table.
     *
     * @example test[1-4]
     *
     * @var string
     */
    public $tableExpr;

    /**
     * @description The GUID of the logical table.
     *
     * @example IDB_L_308302.yuyang_test.test_ch
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The ID of the logical table.
     *
     * @example 1
     *
     * @var string
     */
    public $tableId;

    /**
     * @description The name of the logical table.
     *
     * @example test
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'databaseId'    => 'DatabaseId',
        'logic'         => 'Logic',
        'ownerIdList'   => 'OwnerIdList',
        'ownerNameList' => 'OwnerNameList',
        'schemaName'    => 'SchemaName',
        'tableCount'    => 'TableCount',
        'tableExpr'     => 'TableExpr',
        'tableGuid'     => 'TableGuid',
        'tableId'       => 'TableId',
        'tableName'     => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->ownerIdList) {
            $res['OwnerIdList'] = null !== $this->ownerIdList ? $this->ownerIdList->toMap() : null;
        }
        if (null !== $this->ownerNameList) {
            $res['OwnerNameList'] = null !== $this->ownerNameList ? $this->ownerNameList->toMap() : null;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }
        if (null !== $this->tableExpr) {
            $res['TableExpr'] = $this->tableExpr;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logicTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['OwnerIdList'])) {
            $model->ownerIdList = ownerIdList::fromMap($map['OwnerIdList']);
        }
        if (isset($map['OwnerNameList'])) {
            $model->ownerNameList = ownerNameList::fromMap($map['OwnerNameList']);
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }
        if (isset($map['TableExpr'])) {
            $model->tableExpr = $map['TableExpr'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
