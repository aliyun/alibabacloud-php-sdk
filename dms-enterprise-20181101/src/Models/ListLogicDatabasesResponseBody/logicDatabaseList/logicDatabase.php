<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody\logicDatabaseList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody\logicDatabaseList\logicDatabase\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody\logicDatabaseList\logicDatabase\ownerNameList;
use AlibabaCloud\Tea\Model;

class logicDatabase extends Model
{
    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var ownerIdList
     */
    public $ownerIdList;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var ownerNameList
     */
    public $ownerNameList;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var string
     */
    public $envType;
    protected $_name = [
        'databaseId'    => 'DatabaseId',
        'ownerIdList'   => 'OwnerIdList',
        'dbType'        => 'DbType',
        'ownerNameList' => 'OwnerNameList',
        'logic'         => 'Logic',
        'schemaName'    => 'SchemaName',
        'searchName'    => 'SearchName',
        'envType'       => 'EnvType',
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
        if (null !== $this->ownerIdList) {
            $res['OwnerIdList'] = null !== $this->ownerIdList ? $this->ownerIdList->toMap() : null;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->ownerNameList) {
            $res['OwnerNameList'] = null !== $this->ownerNameList ? $this->ownerNameList->toMap() : null;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logicDatabase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['OwnerIdList'])) {
            $model->ownerIdList = ownerIdList::fromMap($map['OwnerIdList']);
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['OwnerNameList'])) {
            $model->ownerNameList = ownerNameList::fromMap($map['OwnerNameList']);
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        return $model;
    }
}
