<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $dataLinkName;

    /**
     * @var string
     */
    public $databasePassword;

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
    public $ddlOnline;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $ecsRegion;

    /**
     * @var string
     */
    public $enableSellSitd;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $exportTimeout;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceSource;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $queryTimeout;

    /**
     * @var string
     */
    public $safeRuleId;

    /**
     * @var string
     */
    public $sid;

    /**
     * @var bool
     */
    public $skipTest;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var int
     */
    public $useDsql;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'dataLinkName' => 'DataLinkName',
        'databasePassword' => 'DatabasePassword',
        'databaseUser' => 'DatabaseUser',
        'dbaId' => 'DbaId',
        'ddlOnline' => 'DdlOnline',
        'ecsInstanceId' => 'EcsInstanceId',
        'ecsRegion' => 'EcsRegion',
        'enableSellSitd' => 'EnableSellSitd',
        'envType' => 'EnvType',
        'exportTimeout' => 'ExportTimeout',
        'host' => 'Host',
        'instanceAlias' => 'InstanceAlias',
        'instanceId' => 'InstanceId',
        'instanceSource' => 'InstanceSource',
        'instanceType' => 'InstanceType',
        'port' => 'Port',
        'queryTimeout' => 'QueryTimeout',
        'safeRuleId' => 'SafeRuleId',
        'sid' => 'Sid',
        'skipTest' => 'SkipTest',
        'templateId' => 'TemplateId',
        'templateType' => 'TemplateType',
        'tid' => 'Tid',
        'useDsql' => 'UseDsql',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
