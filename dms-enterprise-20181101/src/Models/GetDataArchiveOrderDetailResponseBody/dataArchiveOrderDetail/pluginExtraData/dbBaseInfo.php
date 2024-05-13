<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\dbBaseInfo\standardGroup;
use AlibabaCloud\Tea\Model;

class dbBaseInfo extends Model
{
    /**
     * @description The alias of the database instance.
     *
     * @example tf-testAccDMSEnterpriseLogicDatabase853****
     *
     * @var string
     */
    public $alias;

    /**
     * @description The timeout period of queries on the database.
     *
     * @example 600
     *
     * @var int
     */
    public $alterTimeout;

    /**
     * @description Indicates whether access control is enabled for data assets. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $assetControl;

    /**
     * @description The name of the instance in the instance list.
     *
     * @example test
     *
     * @var string
     */
    public $catalogName;

    /**
     * @description Indicates whether the instance is added to the DMS whitelist.
     *
     * @example whitelist_done
     *
     * @var string
     */
    public $clusterNode;

    /**
     * @description The ID of the database. You can call the [SearchDatabase](https://help.aliyun.com/document_detail/141876.html) operation to query the ID of the database.
     *
     * >  You can call the [ListDatabases](https://help.aliyun.com/document_detail/141873.html) operation to query the ID of a physical database or the [ListLogicDatabases](https://help.aliyun.com/document_detail/141874.html) operation to query the ID of a logical database.
     * @example 348****
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The type of the database. For information about the valid values of this parameter, see [DbType parameter](https://help.aliyun.com/document_detail/198106.html).
     *
     * @example MySQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The ID of the database administrator (DBA) of the instance.
     *
     * @example 16****
     *
     * @var int
     */
    public $dbaId;

    /**
     * @description The nickname of the DBA of the instance.
     *
     * @example DBA
     *
     * @var string
     */
    public $dbaName;

    /**
     * @description The complete endpoint of the database.
     *
     * @example test@rm-2ze756u8837****.mysql.rds.aliyuncs.com:3306 [test]
     *
     * @var string
     */
    public $description;

    /**
     * @description The encoding format of the database.
     *
     * @example utf8
     *
     * @var string
     */
    public $encoding;

    /**
     * @description The type of the environment to which the database belongs. Valid values:
     *
     *   **product**: production environment
     *   **dev**: development environment
     *   **pre**: staging environment
     *   **test**: test environment
     *   **sit**: system integration testing (SIT) environment
     *   **uat**: user acceptance testing (UAT) environment
     *   **pet**: stress testing environment
     *   **stag**: STAG environment
     *
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @description Indicates whether the instance needs special attention. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $follow;

    /**
     * @description The endpoint that is used to connect to the database.
     *
     * @example rm-2ze756u8837****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The region in which the database instance resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $idc;

    /**
     * @description The name of the region in which the database instance resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $idcTitle;

    /**
     * @description The ID of the instance to which the database belongs.
     *
     * @example 175****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The source of the database instance.Valid values:
     *
     *   **RDS**: an ApsaraDB RDS instance.
     *   **ECS_OWN**: a self-managed database deployed on an Elastic Compute Service (ECS) instance.
     *   **PUBLIC_OWN**: a self-managed database instance that is connected over the Internet.
     *   **VPC_ID**: a self-managed database instance in a virtual private cloud (VPC) that is connected over Express Connect circuits.
     *   **GATEWAY**: a database instance connected by using a database gateway.
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceSource;

    /**
     * @description The time when the database information was last obtained.
     *
     * @example 2023-05-14 18:34:45
     *
     * @var string
     */
    public $lastSyncTime;

    /**
     * @description The instance level.
     *
     * @example medium
     *
     * @var string
     */
    public $level;

    /**
     * @description Indicates whether the database is logical. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The IDs of the owners of the databases, which are stored as an array. You can call the [GetUser](https://help.aliyun.com/document_detail/147098.html) or [ListUsers](https://help.aliyun.com/document_detail/141938.html) operation to query the IDs of the owners.
     *
     * >  The value of OwnerIds is the same as the value of UserId
     * @var int[]
     */
    public $ownerIds;

    /**
     * @description The usernames of the database owners.
     *
     * @var string[]
     */
    public $ownerNames;

    /**
     * @description The port that is used to connect to the database.
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
     * @example test@rm-2ze756u8837****.mysql.rds.aliyuncs.com:3306 [test]
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The details of the control mode of the instance.
     *
     * @var standardGroup
     */
    public $standardGroup;

    /**
     * @description The status of the database. Valid values:
     *
     *   **NORMAL**: The database is running as expected.
     *   **DISABLE**: The database is disabled.
     *   **OFFLINE**: The database is unpublished.
     *   **NOT_EXIST**: The database does not exist.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $state;

    /**
     * @description The number of tables.
     *
     * @example 201
     *
     * @var int
     */
    public $tableCount;

    /**
     * @description The name of TNS.
     *
     * @example TNS_4010
     *
     * @var string
     */
    public $tnsName;

    /**
     * @description The unit type.
     *
     * @example -1
     *
     * @var string
     */
    public $unitType;
    protected $_name = [
        'alias'          => 'Alias',
        'alterTimeout'   => 'AlterTimeout',
        'assetControl'   => 'AssetControl',
        'catalogName'    => 'CatalogName',
        'clusterNode'    => 'ClusterNode',
        'dbId'           => 'DbId',
        'dbType'         => 'DbType',
        'dbaId'          => 'DbaId',
        'dbaName'        => 'DbaName',
        'description'    => 'Description',
        'encoding'       => 'Encoding',
        'envType'        => 'EnvType',
        'follow'         => 'Follow',
        'host'           => 'Host',
        'idc'            => 'Idc',
        'idcTitle'       => 'IdcTitle',
        'instanceId'     => 'InstanceId',
        'instanceSource' => 'InstanceSource',
        'lastSyncTime'   => 'LastSyncTime',
        'level'          => 'Level',
        'logic'          => 'Logic',
        'ownerIds'       => 'OwnerIds',
        'ownerNames'     => 'OwnerNames',
        'port'           => 'Port',
        'schemaName'     => 'SchemaName',
        'searchName'     => 'SearchName',
        'standardGroup'  => 'StandardGroup',
        'state'          => 'State',
        'tableCount'     => 'TableCount',
        'tnsName'        => 'TnsName',
        'unitType'       => 'UnitType',
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
        if (null !== $this->alterTimeout) {
            $res['AlterTimeout'] = $this->alterTimeout;
        }
        if (null !== $this->assetControl) {
            $res['AssetControl'] = $this->assetControl;
        }
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }
        if (null !== $this->clusterNode) {
            $res['ClusterNode'] = $this->clusterNode;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->follow) {
            $res['Follow'] = $this->follow;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->idc) {
            $res['Idc'] = $this->idc;
        }
        if (null !== $this->idcTitle) {
            $res['IdcTitle'] = $this->idcTitle;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }
        if (null !== $this->lastSyncTime) {
            $res['LastSyncTime'] = $this->lastSyncTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->ownerIds) {
            $res['OwnerIds'] = $this->ownerIds;
        }
        if (null !== $this->ownerNames) {
            $res['OwnerNames'] = $this->ownerNames;
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
        if (null !== $this->standardGroup) {
            $res['StandardGroup'] = null !== $this->standardGroup ? $this->standardGroup->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->tableCount) {
            $res['TableCount'] = $this->tableCount;
        }
        if (null !== $this->tnsName) {
            $res['TnsName'] = $this->tnsName;
        }
        if (null !== $this->unitType) {
            $res['UnitType'] = $this->unitType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbBaseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['AlterTimeout'])) {
            $model->alterTimeout = $map['AlterTimeout'];
        }
        if (isset($map['AssetControl'])) {
            $model->assetControl = $map['AssetControl'];
        }
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }
        if (isset($map['ClusterNode'])) {
            $model->clusterNode = $map['ClusterNode'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Follow'])) {
            $model->follow = $map['Follow'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Idc'])) {
            $model->idc = $map['Idc'];
        }
        if (isset($map['IdcTitle'])) {
            $model->idcTitle = $map['IdcTitle'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }
        if (isset($map['LastSyncTime'])) {
            $model->lastSyncTime = $map['LastSyncTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['OwnerIds'])) {
            if (!empty($map['OwnerIds'])) {
                $model->ownerIds = $map['OwnerIds'];
            }
        }
        if (isset($map['OwnerNames'])) {
            if (!empty($map['OwnerNames'])) {
                $model->ownerNames = $map['OwnerNames'];
            }
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
        if (isset($map['StandardGroup'])) {
            $model->standardGroup = standardGroup::fromMap($map['StandardGroup']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TableCount'])) {
            $model->tableCount = $map['TableCount'];
        }
        if (isset($map['TnsName'])) {
            $model->tnsName = $map['TnsName'];
        }
        if (isset($map['UnitType'])) {
            $model->unitType = $map['UnitType'];
        }

        return $model;
    }
}
