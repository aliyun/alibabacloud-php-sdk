<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetInstanceResponseBody;

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
    public $host;

    /**
     * @var string
     */
    public $databaseUser;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $dbaId;

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
     * @var int
     */
    public $useDsql;

    /**
     * @var string
     */
    public $instanceType;

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
    public $databasePassword;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $sid;

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
    public $safeRuleId;

    /**
     * @var string
     */
    public $ecsRegion;

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
    protected $_name = [
        'vpcId'            => 'VpcId',
        'host'             => 'Host',
        'databaseUser'     => 'DatabaseUser',
        'state'            => 'State',
        'dbaId'            => 'DbaId',
        'dataLinkName'     => 'DataLinkName',
        'exportTimeout'    => 'ExportTimeout',
        'instanceId'       => 'InstanceId',
        'useDsql'          => 'UseDsql',
        'instanceType'     => 'InstanceType',
        'port'             => 'Port',
        'ecsInstanceId'    => 'EcsInstanceId',
        'databasePassword' => 'DatabasePassword',
        'envType'          => 'EnvType',
        'sid'              => 'Sid',
        'instanceAlias'    => 'InstanceAlias',
        'ddlOnline'        => 'DdlOnline',
        'safeRuleId'       => 'SafeRuleId',
        'ecsRegion'        => 'EcsRegion',
        'dbaNickName'      => 'DbaNickName',
        'queryTimeout'     => 'QueryTimeout',
        'instanceSource'   => 'InstanceSource',
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
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->databaseUser) {
            $res['DatabaseUser'] = $this->databaseUser;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->dbaId) {
            $res['DbaId'] = $this->dbaId;
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
        if (null !== $this->useDsql) {
            $res['UseDsql'] = $this->useDsql;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->databasePassword) {
            $res['DatabasePassword'] = $this->databasePassword;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->ddlOnline) {
            $res['DdlOnline'] = $this->ddlOnline;
        }
        if (null !== $this->safeRuleId) {
            $res['SafeRuleId'] = $this->safeRuleId;
        }
        if (null !== $this->ecsRegion) {
            $res['EcsRegion'] = $this->ecsRegion;
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
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['DatabaseUser'])) {
            $model->databaseUser = $map['DatabaseUser'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['DbaId'])) {
            $model->dbaId = $map['DbaId'];
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
        if (isset($map['UseDsql'])) {
            $model->useDsql = $map['UseDsql'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['DatabasePassword'])) {
            $model->databasePassword = $map['DatabasePassword'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['DdlOnline'])) {
            $model->ddlOnline = $map['DdlOnline'];
        }
        if (isset($map['SafeRuleId'])) {
            $model->safeRuleId = $map['SafeRuleId'];
        }
        if (isset($map['EcsRegion'])) {
            $model->ecsRegion = $map['EcsRegion'];
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

        return $model;
    }
}
