<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabasesResponseBody\databaseList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabasesResponseBody\databaseList\database\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabasesResponseBody\databaseList\database\ownerNameList;
use AlibabaCloud\Tea\Model;

class database extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $catalogName;

    /**
     * @example 1
     *
     * @var string
     */
    public $databaseId;

    /**
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @example 1
     *
     * @var string
     */
    public $dbaId;

    /**
     * @example dba_user
     *
     * @var string
     */
    public $dbaName;

    /**
     * @example utf-8
     *
     * @var string
     */
    public $encoding;

    /**
     * @example dev
     *
     * @var string
     */
    public $envType;

    /**
     * @example xxx.xxx.xxx.xxx
     *
     * @var string
     */
    public $host;

    /**
     * @example 1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var ownerIdList
     */
    public $ownerIdList;

    /**
     * @var ownerNameList
     */
    public $ownerNameList;

    /**
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @example test
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example test@xxx.xxx.xxx.xxx:3306
     *
     * @var string
     */
    public $searchName;

    /**
     * @example test
     *
     * @var string
     */
    public $sid;

    /**
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
