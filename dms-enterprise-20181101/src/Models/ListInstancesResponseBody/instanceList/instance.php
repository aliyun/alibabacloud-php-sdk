<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstancesResponseBody\instanceList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstancesResponseBody\instanceList\instance\ownerIdList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstancesResponseBody\instanceList\instance\ownerNameList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstancesResponseBody\instanceList\instance\standardGroup;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The name of the database link for the database instance.
     *
     * @example dblink_test
     *
     * @var string
     */
    public $dataLinkName;

    /**
     * @description The password that is used to log on to the database instance.
     *
     * @example ******
     *
     * @var string
     */
    public $databasePassword;

    /**
     * @description The account that is used to log on to the database.
     *
     * @example dbUser
     *
     * @var string
     */
    public $databaseUser;

    /**
     * @description The ID of the database administrator (DBA) of the database instance.
     *
     * @example 31****
     *
     * @var string
     */
    public $dbaId;

    /**
     * @description The nickname of the DBA of the instance.
     *
     * @example dbaName
     *
     * @var string
     */
    public $dbaNickName;

    /**
     * @description Indicates whether the lock-free schema change feature is enabled for the database instance.
     *
     * @example 1
     *
     * @var int
     */
    public $ddlOnline;

    /**
     * @description The ID of the ECS instance on which the database instance is deployed.
     *
     * @example 150****
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @description The ID of the region in which the database instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ecsRegion;

    /**
     * @description The type of the environment to which the database instance belongs. Valid values:
     *
     *   **product:** production environment
     *   **dev**: development environment
     *   **pre**: pre-release environment
     *   **test**: test environment
     *   **sit**: SIT environment
     *   **uat**: UAT environment
     *   **pet**: stress testing environment
     *   **stag:** staging environment
     *
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @description The timeout period for exporting data from the database instance.
     *
     * @example 86400
     *
     * @var int
     */
    public $exportTimeout;

    /**
     * @description The host address that is used to connect to the database instance.
     *
     * @example ****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The alias of the database instance.
     *
     * @example test
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @description The ID of the instance.
     *
     * @example 150***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The source of the database instance.
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceSource;

    /**
     * @description The type of the database instance.
     *
     * @example mysql
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The IDs of the owners of the database instance.
     *
     * @var ownerIdList
     */
    public $ownerIdList;

    /**
     * @description The nicknames of the owners of the database instance.
     *
     * @var ownerNameList
     */
    public $ownerNameList;

    /**
     * @description The port number that is used to connect to the database instance.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The timeout period for querying data in the database instance.
     *
     * @example 60
     *
     * @var int
     */
    public $queryTimeout;

    /**
     * @description The ID of the security rule set of the database instance.
     *
     * @example 1
     *
     * @var string
     */
    public $safeRuleId;

    /**
     * @description Indicates whether the sensitive data protection feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $sellSitd;

    /**
     * @var string
     */
    public $sellTrust;

    /**
     * @description The system ID (SID) of the database instance.
     *
     * @example test
     *
     * @var string
     */
    public $sid;

    /**
     * @description The control mode of the database instance.
     *
     * @var standardGroup
     */
    public $standardGroup;

    /**
     * @description The status of the database instance.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $state;

    /**
     * @description Indicates whether the cross-database query feature is enabled for the database instance. Valid values:
     *
     *   **0**: disabled
     *   **1:**: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $useDsql;

    /**
     * @description The ID of the VPC to which the database instance belongs.
     *
     * @example vpc-o6wrloqsdqc9io3mg****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'dataLinkName' => 'DataLinkName',
        'databasePassword' => 'DatabasePassword',
        'databaseUser' => 'DatabaseUser',
        'dbaId' => 'DbaId',
        'dbaNickName' => 'DbaNickName',
        'ddlOnline' => 'DdlOnline',
        'ecsInstanceId' => 'EcsInstanceId',
        'ecsRegion' => 'EcsRegion',
        'envType' => 'EnvType',
        'exportTimeout' => 'ExportTimeout',
        'host' => 'Host',
        'instanceAlias' => 'InstanceAlias',
        'instanceId' => 'InstanceId',
        'instanceSource' => 'InstanceSource',
        'instanceType' => 'InstanceType',
        'ownerIdList' => 'OwnerIdList',
        'ownerNameList' => 'OwnerNameList',
        'port' => 'Port',
        'queryTimeout' => 'QueryTimeout',
        'safeRuleId' => 'SafeRuleId',
        'sellSitd' => 'SellSitd',
        'sellTrust' => 'SellTrust',
        'sid' => 'Sid',
        'standardGroup' => 'StandardGroup',
        'state' => 'State',
        'useDsql' => 'UseDsql',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataLinkName) {
            $res['DataLinkName'] = $this->dataLinkName;
        }
        if (null !== $this->databasePassword) {
            $res['DatabasePassword'] = $this->databasePassword;
        }
        if (null !== $this->databaseUser) {
            $res['DatabaseUser'] = $this->databaseUser;
        }
        if (null !== $this->dbaId) {
            $res['DbaId'] = $this->dbaId;
        }
        if (null !== $this->dbaNickName) {
            $res['DbaNickName'] = $this->dbaNickName;
        }
        if (null !== $this->ddlOnline) {
            $res['DdlOnline'] = $this->ddlOnline;
        }
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->ecsRegion) {
            $res['EcsRegion'] = $this->ecsRegion;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->exportTimeout) {
            $res['ExportTimeout'] = $this->exportTimeout;
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
        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (null !== $this->queryTimeout) {
            $res['QueryTimeout'] = $this->queryTimeout;
        }
        if (null !== $this->safeRuleId) {
            $res['SafeRuleId'] = $this->safeRuleId;
        }
        if (null !== $this->sellSitd) {
            $res['SellSitd'] = $this->sellSitd;
        }
        if (null !== $this->sellTrust) {
            $res['SellTrust'] = $this->sellTrust;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->standardGroup) {
            $res['StandardGroup'] = null !== $this->standardGroup ? $this->standardGroup->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->useDsql) {
            $res['UseDsql'] = $this->useDsql;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataLinkName'])) {
            $model->dataLinkName = $map['DataLinkName'];
        }
        if (isset($map['DatabasePassword'])) {
            $model->databasePassword = $map['DatabasePassword'];
        }
        if (isset($map['DatabaseUser'])) {
            $model->databaseUser = $map['DatabaseUser'];
        }
        if (isset($map['DbaId'])) {
            $model->dbaId = $map['DbaId'];
        }
        if (isset($map['DbaNickName'])) {
            $model->dbaNickName = $map['DbaNickName'];
        }
        if (isset($map['DdlOnline'])) {
            $model->ddlOnline = $map['DdlOnline'];
        }
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['EcsRegion'])) {
            $model->ecsRegion = $map['EcsRegion'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ExportTimeout'])) {
            $model->exportTimeout = $map['ExportTimeout'];
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
        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
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
        if (isset($map['QueryTimeout'])) {
            $model->queryTimeout = $map['QueryTimeout'];
        }
        if (isset($map['SafeRuleId'])) {
            $model->safeRuleId = $map['SafeRuleId'];
        }
        if (isset($map['SellSitd'])) {
            $model->sellSitd = $map['SellSitd'];
        }
        if (isset($map['SellTrust'])) {
            $model->sellTrust = $map['SellTrust'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['StandardGroup'])) {
            $model->standardGroup = standardGroup::fromMap($map['StandardGroup']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UseDsql'])) {
            $model->useDsql = $map['UseDsql'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
