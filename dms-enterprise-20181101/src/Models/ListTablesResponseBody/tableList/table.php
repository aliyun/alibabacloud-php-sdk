<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponseBody\tableList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponseBody\tableList\table\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponseBody\tableList\table\ownerNameList;
use AlibabaCloud\Tea\Model;

class table extends Model
{
    /**
     * @description The ID of the physical database.
     *
     * @example 1860****
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The description of the table.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The encoding format of the table.
     *
     * @example utf8
     *
     * @var string
     */
    public $encoding;

    /**
     * @description The engine of the table.
     *
     * @example InnoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The number of rows in the table. This is a statistical value and does not indicate the actual number of rows.
     *
     * @example 10085
     *
     * @var int
     */
    public $numRows;

    /**
     * @description The IDs of the owners of the table.
     *
     * @var ownerIdList
     */
    public $ownerIdList;

    /**
     * @description The nicknames of the owners of the table.
     *
     * @var ownerNameList
     */
    public $ownerNameList;

    /**
     * @description The storage space that is occupied by the table. This is a statistical value and does not indicate the accurate storage space. Unit: MB.
     *
     * @example 1024
     *
     * @var int
     */
    public $storeCapacity;

    /**
     * @description The GUID of the table in DMS.
     *
     * @example IDB_44743****.qntest.consumption_records
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The ID of the table.
     *
     * @example 44743****
     *
     * @var string
     */
    public $tableId;

    /**
     * @description The name of the table.
     *
     * @example consumption_records
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The database in which the table resides.
     *
     * @example qntest
     *
     * @var string
     */
    public $tableSchemaName;

    /**
     * @description The type of the table. Default value: NORMAL.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $tableType;
    protected $_name = [
        'databaseId'      => 'DatabaseId',
        'description'     => 'Description',
        'encoding'        => 'Encoding',
        'engine'          => 'Engine',
        'numRows'         => 'NumRows',
        'ownerIdList'     => 'OwnerIdList',
        'ownerNameList'   => 'OwnerNameList',
        'storeCapacity'   => 'StoreCapacity',
        'tableGuid'       => 'TableGuid',
        'tableId'         => 'TableId',
        'tableName'       => 'TableName',
        'tableSchemaName' => 'TableSchemaName',
        'tableType'       => 'TableType',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->numRows) {
            $res['NumRows'] = $this->numRows;
        }
        if (null !== $this->ownerIdList) {
            $res['OwnerIdList'] = null !== $this->ownerIdList ? $this->ownerIdList->toMap() : null;
        }
        if (null !== $this->ownerNameList) {
            $res['OwnerNameList'] = null !== $this->ownerNameList ? $this->ownerNameList->toMap() : null;
        }
        if (null !== $this->storeCapacity) {
            $res['StoreCapacity'] = $this->storeCapacity;
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
        if (null !== $this->tableSchemaName) {
            $res['TableSchemaName'] = $this->tableSchemaName;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return table
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['NumRows'])) {
            $model->numRows = $map['NumRows'];
        }
        if (isset($map['OwnerIdList'])) {
            $model->ownerIdList = ownerIdList::fromMap($map['OwnerIdList']);
        }
        if (isset($map['OwnerNameList'])) {
            $model->ownerNameList = ownerNameList::fromMap($map['OwnerNameList']);
        }
        if (isset($map['StoreCapacity'])) {
            $model->storeCapacity = $map['StoreCapacity'];
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
        if (isset($map['TableSchemaName'])) {
            $model->tableSchemaName = $map['TableSchemaName'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }

        return $model;
    }
}
