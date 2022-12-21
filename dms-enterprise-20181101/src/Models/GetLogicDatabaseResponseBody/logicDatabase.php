<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponseBody\logicDatabase\databaseIds;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponseBody\logicDatabase\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponseBody\logicDatabase\ownerNameList;
use AlibabaCloud\Tea\Model;

class logicDatabase extends Model
{
    /**
     * @description The alias of the logical database.
     *
     * @example test_logic_alias
     *
     * @var string
     */
    public $alias;

    /**
     * @description The ID of the logical database.
     *
     * @example 1***
     *
     * @var string
     */
    public $databaseId;

    /**
     * @var databaseIds
     */
    public $databaseIds;

    /**
     * @description The type of the database. For more information about the valid values of the DbType parameter, see [DbType parameter](https://www.alibabacloud.com/help/en/data-management-service/latest/dbtype-parameter).
     *
     * @example polardb
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the environment to which the database belongs. Valid values:
     *
     * - stag: STAG environment
     * @example dev
     *
     * @var string
     */
    public $envType;

    /**
     * @description Indicates whether the database is a logical database. The return value is true.
     *
     * @example true
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The IDs of the owners of the logical database.
     *
     * @var ownerIdList
     */
    public $ownerIdList;

    /**
     * @description The names of the owners of the logical database.
     *
     * @var ownerNameList
     */
    public $ownerNameList;

    /**
     * @description The name of the logical database.
     *
     * @example test_logic_db
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name that is used to search for the logical database.
     *
     * @example test_logic_db[test_logic_alias]
     *
     * @var string
     */
    public $searchName;
    protected $_name = [
        'alias'         => 'Alias',
        'databaseId'    => 'DatabaseId',
        'databaseIds'   => 'DatabaseIds',
        'dbType'        => 'DbType',
        'envType'       => 'EnvType',
        'logic'         => 'Logic',
        'ownerIdList'   => 'OwnerIdList',
        'ownerNameList' => 'OwnerNameList',
        'schemaName'    => 'SchemaName',
        'searchName'    => 'SearchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->databaseIds) {
            $res['DatabaseIds'] = null !== $this->databaseIds ? $this->databaseIds->toMap() : null;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
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
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['DatabaseIds'])) {
            $model->databaseIds = databaseIds::fromMap($map['DatabaseIds']);
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
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
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        return $model;
    }
}
