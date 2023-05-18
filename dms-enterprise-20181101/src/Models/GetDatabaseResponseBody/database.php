<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseResponseBody\database\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseResponseBody\database\ownerNameList;
use AlibabaCloud\Tea\Model;

class database extends Model
{
    /**
     * @description The type of the database. For more information about the valid values of this parameter, see [DbType parameter](~~198106~~).
     *
     * @example def
     *
     * @var string
     */
    public $catalogName;

    /**
     * @description The names of the owners of the database.
     *
     * @example 984****
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The system identifier (SID) of the database.
     *
     * >  The SID uniquely identifies an Oracle database. After a database is created, a SID is generated for the database.
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The port that is used to connect to the database.
     *
     * @example 27****
     *
     * @var string
     */
    public $dbaId;

    /**
     * @description The encoding format of the database.
     *
     * @example dba_name
     *
     * @var string
     */
    public $dbaName;

    /**
     * @description The port that is used to connect to the database.
     *
     * @example utf8mb4
     *
     * @var string
     */
    public $encoding;

    /**
     * @description The endpoint that is used to connect to the database.
     *
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @description The IDs of the owners of the database.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @description The status of the database. Valid values:
     *
     *   **NORMAL**: The database is running as expected.
     *   **DISABLE**: The database is disabled.
     *   **OFFLINE**: The database is unpublished.
     *   **NOT_EXIST**: The database does not exist.
     *
     * @example 149****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the database.
     *
     * @var ownerIdList
     */
    public $ownerIdList;

    /**
     * @description The ID of the database administrator (DBA).
     *
     * @var ownerNameList
     */
    public $ownerNameList;

    /**
     * @description The error message.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the instance.
     *
     * @example mysql
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The ID of the request.
     *
     * @example mysql@192.168.XX.XX:3306
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The nickname of the DBA.
     *
     * @example test_sid
     *
     * @var string
     */
    public $sid;

    /**
     * @description The endpoint that is used to connect to the database.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'catalogName'   => 'CatalogName',
        'databaseId'    => 'DatabaseId',
        'dbType'        => 'DbType',
        'dbaId'         => 'DbaId',
        'dbaName'       => 'DbaName',
        'encoding'      => 'Encoding',
        'envType'       => 'EnvType',
        'host'          => 'Host',
        'instanceAlias' => 'InstanceAlias',
        'instanceId'    => 'InstanceId',
        'ownerIdList'   => 'OwnerIdList',
        'ownerNameList' => 'OwnerNameList',
        'port'          => 'Port',
        'schemaName'    => 'SchemaName',
        'searchName'    => 'SearchName',
        'sid'           => 'Sid',
        'state'         => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dbaId) {
            $res['DbaId'] = $this->dbaId;
        }
        if (null !== $this->dbaName) {
            $res['DbaName'] = $this->dbaName;
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
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return database
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DbaId'])) {
            $model->dbaId = $map['DbaId'];
        }
        if (isset($map['DbaName'])) {
            $model->dbaName = $map['DbaName'];
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
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
