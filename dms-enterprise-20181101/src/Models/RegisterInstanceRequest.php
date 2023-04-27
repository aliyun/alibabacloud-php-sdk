<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class RegisterInstanceRequest extends Model
{
    /**
     * @example dblink_test
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
     * @example dmstest
     *
     * @var string
     */
    public $databaseUser;

    /**
     * @example 22275482072787****
     *
     * @var int
     */
    public $dbaUid;

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
     * @example 172.XX.XXX.254
     *
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $instanceAlias;

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
     * @example 60
     *
     * @var int
     */
    public $queryTimeout;

    /**
     * @var string
     */
    public $safeRule;

    /**
     * @example XXX
     *
     * @var string
     */
    public $sid;

    /**
     * @example true
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
     * @example 3***
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
     * @example vpc-xxxxxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'dataLinkName'     => 'DataLinkName',
        'databasePassword' => 'DatabasePassword',
        'databaseUser'     => 'DatabaseUser',
        'dbaUid'           => 'DbaUid',
        'ddlOnline'        => 'DdlOnline',
        'ecsInstanceId'    => 'EcsInstanceId',
        'ecsRegion'        => 'EcsRegion',
        'enableSellSitd'   => 'EnableSellSitd',
        'envType'          => 'EnvType',
        'exportTimeout'    => 'ExportTimeout',
        'host'             => 'Host',
        'instanceAlias'    => 'InstanceAlias',
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
        if (null !== $this->dbaUid) {
            $res['DbaUid'] = $this->dbaUid;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterInstanceRequest
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
        if (isset($map['DbaUid'])) {
            $model->dbaUid = $map['DbaUid'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
