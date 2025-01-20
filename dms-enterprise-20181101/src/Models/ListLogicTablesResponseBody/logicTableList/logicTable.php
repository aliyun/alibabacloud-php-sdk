<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody\logicTableList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody\logicTableList\logicTable\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody\logicTableList\logicTable\ownerNameList;

class logicTable extends Model
{
    /**
     * @var string
     */
    public $databaseId;
    /**
     * @var bool
     */
    public $logic;
    /**
     * @var ownerIdList
     */
    public $ownerIdList;
    /**
     * @var ownerNameList
     */
    public $ownerNameList;
    /**
     * @var string
     */
    public $schemaName;
    /**
     * @var string
     */
    public $tableCount;
    /**
     * @var string
     */
    public $tableExpr;
    /**
     * @var string
     */
    public $tableGuid;
    /**
     * @var string
     */
    public $tableId;
    /**
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
        if (null !== $this->ownerIdList) {
            $this->ownerIdList->validate();
        }
        if (null !== $this->ownerNameList) {
            $this->ownerNameList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }

        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        if (null !== $this->ownerIdList) {
            $res['OwnerIdList'] = null !== $this->ownerIdList ? $this->ownerIdList->toArray($noStream) : $this->ownerIdList;
        }

        if (null !== $this->ownerNameList) {
            $res['OwnerNameList'] = null !== $this->ownerNameList ? $this->ownerNameList->toArray($noStream) : $this->ownerNameList;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
