<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceRequest extends Model
{
    /**
     * @example dblink_test
     *
     * @var string
     */
    public $dataLinkName;

    /**
     * @example test***
     *
     * @var string
     */
    public $databasePassword;

    /**
     * @example testsdb
     *
     * @var string
     */
    public $databaseUser;

    /**
     * @example 27****
     *
     * @var int
     */
    public $dbaId;

    /**
     * @example 2
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
    public $enableSellCommon;

    /**
     * @example Y
     *
     * @var string
     */
    public $enableSellSitd;

    /**
     * @example NULL
     *
     * @var string
     */
    public $enableSellStable;

    /**
     * @example Y
     *
     * @var string
     */
    public $enableSellTrust;

    /**
     * @example dev
     *
     * @var string
     */
    public $envType;

    /**
     * @example 86400
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
     * @description This parameter is required.
     *
     * @example 183****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example RDS
     *
     * @var string
     */
    public $instanceSource;

    /**
     * @example MySQL
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @example 7200
     *
     * @var int
     */
    public $queryTimeout;

    /**
     * @var string
     */
    public $safeRule;

    /**
     * @example testSid
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
     * @example 31***
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
     * @example 23****
     *
     * @var int
     */
    public $tid;

    /**
     * @example 1
     *
     * @var int
     */
    public $useDsql;

    /**
     * @var int
     */
    public $useSsl;

    /**
     * @example vpc-bp10wnlcmor****
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
        'enableSellCommon' => 'EnableSellCommon',
        'enableSellSitd'   => 'EnableSellSitd',
        'enableSellStable' => 'EnableSellStable',
        'enableSellTrust'  => 'EnableSellTrust',
        'envType'          => 'EnvType',
        'exportTimeout'    => 'ExportTimeout',
        'host'             => 'Host',
        'instanceAlias'    => 'InstanceAlias',
        'instanceId'       => 'InstanceId',
        'instanceSource'   => 'InstanceSource',
        'instanceType'     => 'InstanceType',
        'networkType'      => 'NetworkType',
        'port'             => 'Port',
        'queryTimeout'     => 'QueryTimeout',
        'safeRule'         => 'SafeRule',
        'sid'              => 'Sid',
        'skipTest'         => 'SkipTest',
        'templateId'       => 'TemplateId',
        'templateType'     => 'TemplateType',
        'tid'              => 'Tid',
        'useDsql'          => 'UseDsql',
        'useSsl'           => 'UseSsl',
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
        if (null !== $this->enableSellCommon) {
            $res['EnableSellCommon'] = $this->enableSellCommon;
        }
        if (null !== $this->enableSellSitd) {
            $res['EnableSellSitd'] = $this->enableSellSitd;
        }
        if (null !== $this->enableSellStable) {
            $res['EnableSellStable'] = $this->enableSellStable;
        }
        if (null !== $this->enableSellTrust) {
            $res['EnableSellTrust'] = $this->enableSellTrust;
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
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->queryTimeout) {
            $res['QueryTimeout'] = $this->queryTimeout;
        }
        if (null !== $this->safeRule) {
            $res['SafeRule'] = $this->safeRule;
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
        if (null !== $this->useSsl) {
            $res['UseSsl'] = $this->useSsl;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceRequest
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
        if (isset($map['EnableSellCommon'])) {
            $model->enableSellCommon = $map['EnableSellCommon'];
        }
        if (isset($map['EnableSellSitd'])) {
            $model->enableSellSitd = $map['EnableSellSitd'];
        }
        if (isset($map['EnableSellStable'])) {
            $model->enableSellStable = $map['EnableSellStable'];
        }
        if (isset($map['EnableSellTrust'])) {
            $model->enableSellTrust = $map['EnableSellTrust'];
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
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['QueryTimeout'])) {
            $model->queryTimeout = $map['QueryTimeout'];
        }
        if (isset($map['SafeRule'])) {
            $model->safeRule = $map['SafeRule'];
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
        if (isset($map['UseSsl'])) {
            $model->useSsl = $map['UseSsl'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
