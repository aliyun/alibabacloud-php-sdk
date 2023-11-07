<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class RegisterInstanceRequest extends Model
{
    /**
     * @description The name of the database link for cross-database queries.
     *
     * >
     *
     *   This parameter is required if UseDsql is set to 1.
     *
     *   The name can contain only lowercase letters and underscores (\_).
     *
     *   The name must be unique within a tenant.
     *
     * @example dblink_test
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
     * @example dmstest
     *
     * @var string
     */
    public $databaseUser;

    /**
     * @description The ID of the user who assumes the DBA role of the database instance. You can call the [ListUsers](~~141938~~) or [GetInstance](~~141567~~) operation to query the user ID.
     *
     * @example 22275482072787****
     *
     * @var int
     */
    public $dbaUid;

    /**
     * @var string
     */
    public $dbaUidByString;

    /**
     * @description Specifies whether to enable the lock-free schema change feature for the database instance. Valid values:
     *
     *   **0**: disables the lock-free schema change feature.
     *   **1**: uses the online DDL of MySQL first.
     *   **2**: uses the lock-free schema change feature of DMS first.
     *
     * > Supported database types: ApsaraDB RDS for MySQL, PolarDB for MySQL, ApsaraDB MyBase for MySQL, and third-party MySQL databases.
     * @example 2
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
     *   **NULL or other:** disables the sensitive data protection feature
     *
     * @example Y
     *
     * @var string
     */
    public $enableSellSitd;

    /**
     * @description The type of the environment in which the database instance is deployed. Valid values:
     *
     *   product: production environment
     *   dev: development environment
     *   pre: pre-release environment
     *   test: test environment
     *   sit: system integration testing (SIT) environment
     *   uat: user acceptance testing (UAT) environment
     *   pet: stress testing environment
     *   stag: staging environment
     *
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @description The timeout period for exporting data from the database instance. Unit: seconds.
     *
     * @example 600
     *
     * @var int
     */
    public $exportTimeout;

    /**
     * @description The host address that is used to connect to the database instance.
     *
     * @example 172.XX.XXX.254
     *
     * @var string
     */
    public $host;

    /**
     * @description The alias of the database instance. Specify an alias that can help you identify the database instance in DMS.
     *
     * @example Test instance
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @description The source of the database instance. Valid values:
     *
     *   **PUBLIC_OWN:** a self-managed database instance that is deployed on the Internet
     *   **RDS:** an ApsaraDB RDS instance
     *   **ECS_OWN:** a self-managed database that is deployed on an Elastic Compute Service (ECS) instance
     *   **VPC_IDC:** a self-managed database instance that is deployed in a data center connected over a virtual private cloud (VPC)
     *
     * @example RDS
     *
     * @var string
     */
    public $instanceSource;

    /**
     * @description The type of the database. For more information about the valid values of this parameter, see [DbType parameter](~~198106~~).
     *
     * @example MySQL
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The network type of the database instance. Valid values:
     *
     *   **CLASSIC:** classic network
     *   **VPC:** VPC
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The port that is used to connect to the database instance.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The timeout period for querying data in the database instance. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $queryTimeout;

    /**
     * @description The name of the security rule set (GroupName) for the database instance. You can call the [ListStandardGroups](~~417891~~) or [GetInstance](~~141567~~) operation to query the name of the security rule set.
     *
     * @example Test
     *
     * @var string
     */
    public $safeRule;

    /**
     * @description The system ID (SID) of the database.
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
     * @example true
     *
     * @var bool
     */
    public $skipTest;

    /**
     * @description The ID of the classification template. You can call the [ListClassificationTemplates](~~460613~~) operation to query the template ID.
     *
     * @example 31***
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
     *   **0**: disables the cross-database query feature.
     *   **1**: enables the cross-database query feature.
     *
     * > Supported database types: MySQL, SQL Server, PostgreSQL, PolarDB for PostgreSQL (compatible with Oracle), and ApsaraDB for Redis.
     * @example 1
     *
     * @var int
     */
    public $useDsql;

    /**
     * @description The ID of the VPC to which the database instance belongs.
     *
     * > This parameter is required if the InstanceSource parameter is set to VPC_IDC.
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
        'dbaUidByString'   => 'DbaUidByString',
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
        if (null !== $this->dbaUidByString) {
            $res['DbaUidByString'] = $this->dbaUidByString;
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
        if (isset($map['DbaUidByString'])) {
            $model->dbaUidByString = $map['DbaUidByString'];
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
