<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponseBody\searchDatabaseList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponseBody\searchDatabaseList\searchDatabase\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDatabaseResponseBody\searchDatabaseList\searchDatabase\ownerNameList;
use AlibabaCloud\Tea\Model;

class searchDatabase extends Model
{
    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $dbaId;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $datalinkName;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $sid;

    /**
     * @var ownerIdList
     */
    public $ownerIdList;

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
    public $searchName;

    /**
     * @var string
     */
    public $alias;
    protected $_name = [
        'databaseId'    => 'DatabaseId',
        'host'          => 'Host',
        'dbaId'         => 'DbaId',
        'schemaName'    => 'SchemaName',
        'logic'         => 'Logic',
        'datalinkName'  => 'DatalinkName',
        'port'          => 'Port',
        'envType'       => 'EnvType',
        'sid'           => 'Sid',
        'ownerIdList'   => 'OwnerIdList',
        'encoding'      => 'Encoding',
        'dbType'        => 'DbType',
        'ownerNameList' => 'OwnerNameList',
        'searchName'    => 'SearchName',
        'alias'         => 'Alias',
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
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->dbaId) {
            $res['DbaId'] = $this->dbaId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->datalinkName) {
            $res['DatalinkName'] = $this->datalinkName;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->ownerIdList) {
            $res['OwnerIdList'] = null !== $this->ownerIdList ? $this->ownerIdList->toMap() : null;
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
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
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
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['DbaId'])) {
            $model->dbaId = $map['DbaId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['DatalinkName'])) {
            $model->datalinkName = $map['DatalinkName'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['OwnerIdList'])) {
            $model->ownerIdList = ownerIdList::fromMap($map['OwnerIdList']);
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
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        return $model;
    }
}
