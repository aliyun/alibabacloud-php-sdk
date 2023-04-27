<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @example datalink_test
     *
     * @var string
     */
    public $dataLinkName;

    /**
     * @example ******
     *
     * @var string
     */
    public $databasePassword;

    /**
     * @example dbuser
     *
     * @var string
     */
    public $databaseUser;

    /**
     * @example 27****
     *
     * @var string
     */
    public $dbaId;

    /**
     * @example 0
     *
     * @var int
     */
    public $ddlOnline;

    /**
     * @example i-2zei9gs1t7h8l7ac****
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ecsRegion;

    /**
     * @example Y
     *
     * @var string
     */
    public $enableSellSitd;

    /**
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @example 600
     *
     * @var int
     */
    public $exportTimeout;

    /**
     * @example 192.XXX.0.56
     *
     * @var string
     */
    public $host;

    /**
     * @example instance_test
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @example 126****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ECS_OWN
     *
     * @var string
     */
    public $instanceSource;

    /**
     * @example mysql
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @example 60
     *
     * @var int
     */
    public $queryTimeout;

    /**
     * @example 3****
     *
     * @var string
     */
    public $safeRuleId;

    /**
     * @example XXX
     *
     * @var string
     */
    public $sid;

    /**
     * @example false
     *
     * @var bool
     */
    public $skipTest;

    /**
     * @example 3***
     *
     * @var int
     */
    public $templateId;

    /**
     * @example INNER
     *
     * @var string
     */
    public $templateType;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @example 0
     *
     * @var int
     */
    public $useDsql;

    /**
     * @example vpc-xxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'dataLinkName'     => 'DataLinkName',
        'databasePassword' => 'DatabasePassword',
        'databaseUser'     => 'DatabaseUser',
        'dbaId'            => 'DbaId',
        'ddlOnline'        => 'DdlOnline',
        'ecsInstanceId'    => 'EcsInstanceId',
        'ecsRegion'        => 'EcsRegion',
        'enableSellSitd'   => 'EnableSellSitd',
        'envType'          => 'EnvType',
        'exportTimeout'    => 'ExportTimeout',
        'host'             => 'Host',
        'instanceAlias'    => 'InstanceAlias',
        'instanceId'       => 'InstanceId',
        'instanceSource'   => 'InstanceSource',
        'instanceType'     => 'InstanceType',
        'port'             => 'Port',
        'queryTimeout'     => 'QueryTimeout',
        'safeRuleId'       => 'SafeRuleId',
        'sid'              => 'Sid',
        'skipTest'         => 'SkipTest',
        'templateId'       => 'TemplateId',
        'templateType'     => 'TemplateType',
        'tid'              => 'Tid',
        'useDsql'          => 'UseDsql',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->ddlOnline) {
            $res['DdlOnline'] = $this->ddlOnline;
        }
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->ecsRegion) {
            $res['EcsRegion'] = $this->ecsRegion;
        }
        if (null !== $this->enableSellSitd) {
            $res['EnableSellSitd'] = $this->enableSellSitd;
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->queryTimeout) {
            $res['QueryTimeout'] = $this->queryTimeout;
        }
        if (null !== $this->safeRuleId) {
            $res['SafeRuleId'] = $this->safeRuleId;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->skipTest) {
            $res['SkipTest'] = $this->skipTest;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
     * @return UpdateInstanceRequest
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
        if (isset($map['DdlOnline'])) {
            $model->ddlOnline = $map['DdlOnline'];
        }
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['EcsRegion'])) {
            $model->ecsRegion = $map['EcsRegion'];
        }
        if (isset($map['EnableSellSitd'])) {
            $model->enableSellSitd = $map['EnableSellSitd'];
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['QueryTimeout'])) {
            $model->queryTimeout = $map['QueryTimeout'];
        }
        if (isset($map['SafeRuleId'])) {
            $model->safeRuleId = $map['SafeRuleId'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['SkipTest'])) {
            $model->skipTest = $map['SkipTest'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
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
