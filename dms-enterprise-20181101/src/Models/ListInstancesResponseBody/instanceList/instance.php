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
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $databaseUser;

    /**
     * @var string
     */
    public $dbaId;

    /**
     * @var int
     */
    public $useDsql;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $ecsInstanceId;

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
    public $safeRuleId;

    /**
     * @var ownerNameList
     */
    public $ownerNameList;

    /**
     * @var string
     */
    public $dbaNickName;

    /**
     * @var int
     */
    public $queryTimeout;

    /**
     * @var string
     */
    public $instanceSource;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $dataLinkName;

    /**
     * @var int
     */
    public $exportTimeout;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $databasePassword;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var int
     */
    public $ddlOnline;

    /**
     * @var string
     */
    public $ecsRegion;

    /**
     * @var standardGroup
     */
    public $standardGroup;
    protected $_name = [
        'vpcId'            => 'VpcId',
        'databaseUser'     => 'DatabaseUser',
        'dbaId'            => 'DbaId',
        'useDsql'          => 'UseDsql',
        'port'             => 'Port',
        'ecsInstanceId'    => 'EcsInstanceId',
        'envType'          => 'EnvType',
        'sid'              => 'Sid',
        'ownerIdList'      => 'OwnerIdList',
        'safeRuleId'       => 'SafeRuleId',
        'ownerNameList'    => 'OwnerNameList',
        'dbaNickName'      => 'DbaNickName',
        'queryTimeout'     => 'QueryTimeout',
        'instanceSource'   => 'InstanceSource',
        'host'             => 'Host',
        'state'            => 'State',
        'dataLinkName'     => 'DataLinkName',
        'exportTimeout'    => 'ExportTimeout',
        'instanceId'       => 'InstanceId',
        'instanceType'     => 'InstanceType',
        'databasePassword' => 'DatabasePassword',
        'instanceAlias'    => 'InstanceAlias',
        'ddlOnline'        => 'DdlOnline',
        'ecsRegion'        => 'EcsRegion',
        'standardGroup'    => 'StandardGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->databaseUser) {
            $res['DatabaseUser'] = $this->databaseUser;
        }
        if (null !== $this->dbaId) {
            $res['DbaId'] = $this->dbaId;
        }
        if (null !== $this->useDsql) {
            $res['UseDsql'] = $this->useDsql;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
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
        if (null !== $this->safeRuleId) {
            $res['SafeRuleId'] = $this->safeRuleId;
        }
        if (null !== $this->ownerNameList) {
            $res['OwnerNameList'] = null !== $this->ownerNameList ? $this->ownerNameList->toMap() : null;
        }
        if (null !== $this->dbaNickName) {
            $res['DbaNickName'] = $this->dbaNickName;
        }
        if (null !== $this->queryTimeout) {
            $res['QueryTimeout'] = $this->queryTimeout;
        }
        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->dataLinkName) {
            $res['DataLinkName'] = $this->dataLinkName;
        }
        if (null !== $this->exportTimeout) {
            $res['ExportTimeout'] = $this->exportTimeout;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->databasePassword) {
            $res['DatabasePassword'] = $this->databasePassword;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->ddlOnline) {
            $res['DdlOnline'] = $this->ddlOnline;
        }
        if (null !== $this->ecsRegion) {
            $res['EcsRegion'] = $this->ecsRegion;
        }
        if (null !== $this->standardGroup) {
            $res['StandardGroup'] = null !== $this->standardGroup ? $this->standardGroup->toMap() : null;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['DatabaseUser'])) {
            $model->databaseUser = $map['DatabaseUser'];
        }
        if (isset($map['DbaId'])) {
            $model->dbaId = $map['DbaId'];
        }
        if (isset($map['UseDsql'])) {
            $model->useDsql = $map['UseDsql'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
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
        if (isset($map['SafeRuleId'])) {
            $model->safeRuleId = $map['SafeRuleId'];
        }
        if (isset($map['OwnerNameList'])) {
            $model->ownerNameList = ownerNameList::fromMap($map['OwnerNameList']);
        }
        if (isset($map['DbaNickName'])) {
            $model->dbaNickName = $map['DbaNickName'];
        }
        if (isset($map['QueryTimeout'])) {
            $model->queryTimeout = $map['QueryTimeout'];
        }
        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['DataLinkName'])) {
            $model->dataLinkName = $map['DataLinkName'];
        }
        if (isset($map['ExportTimeout'])) {
            $model->exportTimeout = $map['ExportTimeout'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['DatabasePassword'])) {
            $model->databasePassword = $map['DatabasePassword'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['DdlOnline'])) {
            $model->ddlOnline = $map['DdlOnline'];
        }
        if (isset($map['EcsRegion'])) {
            $model->ecsRegion = $map['EcsRegion'];
        }
        if (isset($map['StandardGroup'])) {
            $model->standardGroup = standardGroup::fromMap($map['StandardGroup']);
        }

        return $model;
    }
}
