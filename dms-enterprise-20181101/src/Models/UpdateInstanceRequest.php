<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @description The name of the database link for cross-database query.
     *
     * >
     *
     *   This parameter is required if the UseDsql parameter is set to 1.
     *
     *   The name can contain only lowercase letters and underscores (\_).
     *   The name must be unique within a tenant.
     *
     * @example datalink_test
     *
     * @var string
     */
    public $dataLinkName;

    /**
     * @description The password that is used to log on to the database.
     *
     * @example ******
     *
     * @var string
     */
    public $databasePassword;

    /**
     * @description The account that is used to log on to the database.
     *
     * @example dbuser
     *
     * @var string
     */
    public $databaseUser;

    /**
     * @description The ID of the user who assumes the database administrator (DBA) role of the database instance. You can call the [ListUsers](~~141938~~) or [GetInstance](~~141567~~) operation to query the user ID.
     *
     * @example 27****
     *
     * @var string
     */
    public $dbaId;

    /**
     * @description Specifies whether to enable the lock-free schema change feature for the database instance. Valid values:
     *
     *   **0:** disables the lock-free schema change feature
     *   **1:** uses the online DDL of MySQL first
     *   **2:** uses the lock-free schema change feature of DMS first
     *
     * @example 0
     *
     * @var int
     */
    public $ddlOnline;

    /**
     * @description The ID of the ECS instance on which the database instance is deployed.
     *
     * > This parameter is required if the InstanceSource parameter is set to ECS_OWN.
     * @example i-2zei9gs1t7h8l7ac****
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @description The ID of the region in which the database instance resides.
     *
     * > This parameter is required if the InstanceSource parameter is set to RDS, ECS_OWN, or VPC_IDC.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ecsRegion;

    /**
     * @description *   **Y:** enables the sensitive data protection feature
     *   **N:** disables the sensitive data protection feature
     *   **NULL or other:** does not update the status of the sensitive data protection feature
     *
     * @example Y
     *
     * @var string
     */
    public $enableSellSitd;

    /**
     * @description The type of the environment in which the database instance is deployed. Valid values:
     *
     *   **product:** production environment
     *   **dev:** development environment
     *   **pre:** pre-release environment
     *   **test:** test environment
     *   **sit:** system integration testing (SIT) environment
     *   **uat:** user acceptance testing (UAT) environment
     *   **pet:** stress testing environment
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
     * @example 600
     *
     * @var int
     */
    public $exportTimeout;

    /**
     * @description The host address that is used to connect to the database instance.
     *
     * @example 192.XXX.0.56
     *
     * @var string
     */
    public $host;

    /**
     * @description The alias of the database instance. Specify an alias that can help you identify the database instance in DMS.
     *
     * @example instance_test
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @description The ID of the database instance. You can call the [GetInstance](~~141567~~) operation to query the instance ID.
     *
     * @example 126****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The source of the database instance. Valid values:
     *
     *   **PUBLIC_OWN:** a self-managed database instance that is deployed on the Internet
     *   **RDS:** an ApsaraDB RDS instance
     *   **ECS_OWN:** a self-managed database that is deployed on an Elastic Compute Service (ECS) instance
     *   **VPC_IDC:** a self-managed database instance that is deployed in a data center connected over a virtual private cloud (VPC)
     *
     * @example ECS_OWN
     *
     * @var string
     */
    public $instanceSource;

    /**
     * @description The type of the database. For more information about the valid values of this parameter, see [DbType parameter](~~198106~~).
     *
     * @example mysql
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The port that is used to connect to the database instance.
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
     * @description The name of the security rule set (GroupName) for the instance. You can call the [ListStandardGroups](~~417891~~) or [GetInstance](~~141567~~) operation to query the name of the security rule set.
     *
     * @example 3****
     *
     * @var string
     */
    public $safeRuleId;

    /**
     * @description The system ID (SID) of the database instance.
     *
     * > This parameter is required if the InstanceType parameter is set to ORACLE.
     * @example XXX
     *
     * @var string
     */
    public $sid;

    /**
     * @description Specifies whether to skip the connectivity test. Valid values:
     *
     *   **true:** skips the connectivity test
     *   **false:** does not skip the connectivity test
     *
     * @example false
     *
     * @var bool
     */
    public $skipTest;

    /**
     * @description The ID of the classification template. You can call the [ListClassificationTemplates](~~460613~~) operation to query the template ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The type of the classification template. You can call the [ListClassificationTemplates](~~460613~~) operation to query the template type.
     *
     * @example INNER
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description Specifies whether to enable the cross-database query feature for the database instance. Valid values:
     *
     *   **0:** disables the cross-database query feature
     *   **1:** enables the cross-database query feature
     *
     * > Supported database types: MySQL, SQL Server, PostgreSQL, PolarDB for Oracle, and ApsaraDB for Redis.
     * @example 0
     *
     * @var int
     */
    public $useDsql;

    /**
     * @description The ID of the VPC to which the database instance belongs.
     *
     * > This parameter is required if the InstanceSource parameter is set to VPC_IDC.
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
