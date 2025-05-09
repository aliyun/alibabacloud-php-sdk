<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponseBody\searchTableList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponseBody\searchTableList\searchTable\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponseBody\searchTableList\searchTable\ownerNameList;

class searchTable extends Model
{
    /**
     * @var string
     */
    public $DBSearchName;

    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dbType;

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
    public $engine;

    /**
     * @var string
     */
    public $envType;

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
    public $tableGuid;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableSchemaName;
    protected $_name = [
        'DBSearchName' => 'DBSearchName',
        'databaseId' => 'DatabaseId',
        'dbName' => 'DbName',
        'dbType' => 'DbType',
        'description' => 'Description',
        'encoding' => 'Encoding',
        'engine' => 'Engine',
        'envType' => 'EnvType',
        'logic' => 'Logic',
        'ownerIdList' => 'OwnerIdList',
        'ownerNameList' => 'OwnerNameList',
        'tableGuid' => 'TableGuid',
        'tableId' => 'TableId',
        'tableName' => 'TableName',
        'tableSchemaName' => 'TableSchemaName',
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
        if (null !== $this->DBSearchName) {
            $res['DBSearchName'] = $this->DBSearchName;
        }

        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
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

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBSearchName'])) {
            $model->DBSearchName = $map['DBSearchName'];
        }

        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
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

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
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

        return $model;
    }
}
