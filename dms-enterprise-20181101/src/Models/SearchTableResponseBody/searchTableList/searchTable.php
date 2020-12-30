<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponseBody\searchTableList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponseBody\searchTableList\searchTable\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponseBody\searchTableList\searchTable\ownerNameList;
use AlibabaCloud\Tea\Model;

class searchTable extends Model
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
     * @var string
     */
    public $DBSearchName;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $dbName;

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
     * @var string
     */
    public $dbType;

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
    public $tableGuid;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $tableId;
    protected $_name = [
        'databaseId'      => 'DatabaseId',
        'tableName'       => 'TableName',
        'DBSearchName'    => 'DBSearchName',
        'logic'           => 'Logic',
        'envType'         => 'EnvType',
        'dbName'          => 'DbName',
        'ownerIdList'     => 'OwnerIdList',
        'description'     => 'Description',
        'encoding'        => 'Encoding',
        'dbType'          => 'DbType',
        'ownerNameList'   => 'OwnerNameList',
        'tableSchemaName' => 'TableSchemaName',
        'tableGuid'       => 'TableGuid',
        'engine'          => 'Engine',
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
        if (null !== $this->DBSearchName) {
            $res['DBSearchName'] = $this->DBSearchName;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
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
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->ownerNameList) {
            $res['OwnerNameList'] = null !== $this->ownerNameList ? $this->ownerNameList->toMap() : null;
        }
        if (null !== $this->tableSchemaName) {
            $res['TableSchemaName'] = $this->tableSchemaName;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchTable
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
        if (isset($map['DBSearchName'])) {
            $model->DBSearchName = $map['DBSearchName'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
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
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['OwnerNameList'])) {
            $model->ownerNameList = ownerNameList::fromMap($map['OwnerNameList']);
        }
        if (isset($map['TableSchemaName'])) {
            $model->tableSchemaName = $map['TableSchemaName'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        return $model;
    }
}
