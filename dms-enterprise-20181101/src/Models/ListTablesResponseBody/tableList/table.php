<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponseBody\tableList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponseBody\tableList\table\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponseBody\tableList\table\ownerNameList;
use AlibabaCloud\Tea\Model;

class table extends Model
{
    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $storeCapacity;

    /**
     * @var ownerIdList
     */
    public $ownerIdList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encoding;

    /**
     * @var ownerNameList
     */
    public $ownerNameList;

    /**
     * @var string
     */
    public $tableSchemaName;

    /**
     * @var string
     */
    public $tableType;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $numRows;

    /**
     * @var string
     */
    public $tableId;
    protected $_name = [
        'databaseId'      => 'DatabaseId',
        'tableName'       => 'TableName',
        'storeCapacity'   => 'StoreCapacity',
        'ownerIdList'     => 'OwnerIdList',
        'description'     => 'Description',
        'encoding'        => 'Encoding',
        'ownerNameList'   => 'OwnerNameList',
        'tableSchemaName' => 'TableSchemaName',
        'tableType'       => 'TableType',
        'tableGuid'       => 'TableGuid',
        'engine'          => 'Engine',
        'numRows'         => 'NumRows',
        'tableId'         => 'TableId',
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
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->storeCapacity) {
            $res['StoreCapacity'] = $this->storeCapacity;
        }
        if (null !== $this->ownerIdList) {
            $res['OwnerIdList'] = null !== $this->ownerIdList ? $this->ownerIdList->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }
        if (null !== $this->ownerNameList) {
            $res['OwnerNameList'] = null !== $this->ownerNameList ? $this->ownerNameList->toMap() : null;
        }
        if (null !== $this->tableSchemaName) {
            $res['TableSchemaName'] = $this->tableSchemaName;
        }
        if (null !== $this->tableType) {
            $res['TableType'] = $this->tableType;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->numRows) {
            $res['NumRows'] = $this->numRows;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['StoreCapacity'])) {
            $model->storeCapacity = $map['StoreCapacity'];
        }
        if (isset($map['OwnerIdList'])) {
            $model->ownerIdList = ownerIdList::fromMap($map['OwnerIdList']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }
        if (isset($map['OwnerNameList'])) {
            $model->ownerNameList = ownerNameList::fromMap($map['OwnerNameList']);
        }
        if (isset($map['TableSchemaName'])) {
            $model->tableSchemaName = $map['TableSchemaName'];
        }
        if (isset($map['TableType'])) {
            $model->tableType = $map['TableType'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['NumRows'])) {
            $model->numRows = $map['NumRows'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        return $model;
    }
}
