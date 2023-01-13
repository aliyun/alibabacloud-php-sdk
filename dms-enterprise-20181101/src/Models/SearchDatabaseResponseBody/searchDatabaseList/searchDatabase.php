<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponseBody\searchDatabaseList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponseBody\searchDatabaseList\searchDatabase\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponseBody\searchDatabaseList\searchDatabase\ownerNameList;
use AlibabaCloud\Tea\Model;

class searchDatabase extends Model
{
    /**
     * @description The alias of the database.
     *
     * @example test_rds
     *
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $catalogName;

    /**
     * @description The ID of the database.
     *
     * @example 2528****
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The name of the data link for cross-database queries.
     *
     * @example datalink_name
     *
     * @var string
     */
    public $datalinkName;

    /**
     * @description The type of the database.
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The ID of the user who assumes the database administrator (DBA) role.
     *
     * @example 10****
     *
     * @var string
     */
    public $dbaId;

    /**
     * @description The encoding method of the database.
     *
     * @example utf8
     *
     * @var string
     */
    public $encoding;

    /**
     * @description The type of the environment to which the database belongs. For more information, see [Change the environment type of an instance](~~163309~~).
     *
     * @example test
     *
     * @var string
     */
    public $envType;

    /**
     * @description The endpoint of the instance in which the database resides.
     *
     * @example rm-xxxx.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @description Indicates whether the database is a logical database. Valid values:
     *
     *   **true**: The database is a logical database.
     *   **false**: The database is not a logical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The IDs of the owners of the database.
     *
     * @var ownerIdList
     */
    public $ownerIdList;

    /**
     * @description The nicknames of the database owners.
     *
     * @var ownerNameList
     */
    public $ownerNameList;

    /**
     * @description The port number of the instance in which the database resides.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The name of the database.
     *
     * @example test
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name that is used to search for the database.
     *
     * @example test@xxx.xxx.xxx.xxx:3306
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The system ID (Sid) of the instance in which the database resides.
     *
     * @example testSid
     *
     * @var string
     */
    public $sid;
    protected $_name = [
        'alias'         => 'Alias',
        'catalogName'   => 'CatalogName',
        'databaseId'    => 'DatabaseId',
        'datalinkName'  => 'DatalinkName',
        'dbType'        => 'DbType',
        'dbaId'         => 'DbaId',
        'encoding'      => 'Encoding',
        'envType'       => 'EnvType',
        'host'          => 'Host',
        'logic'         => 'Logic',
        'ownerIdList'   => 'OwnerIdList',
        'ownerNameList' => 'OwnerNameList',
        'port'          => 'Port',
        'schemaName'    => 'SchemaName',
        'searchName'    => 'SearchName',
        'sid'           => 'Sid',
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
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->datalinkName) {
            $res['DatalinkName'] = $this->datalinkName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dbaId) {
            $res['DbaId'] = $this->dbaId;
        }
        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchDatabase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['DatalinkName'])) {
            $model->datalinkName = $map['DatalinkName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DbaId'])) {
            $model->dbaId = $map['DbaId'];
        }
        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }

        return $model;
    }
}
