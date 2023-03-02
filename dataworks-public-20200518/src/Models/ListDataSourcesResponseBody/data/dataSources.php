<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataSourcesResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataSources extends Model
{
    /**
     * @description The ID of the compute engine instance with which the data source is associated.
     *
     * @example 123
     *
     * @var int
     */
    public $bindingCalcEngineId;

    /**
     * @description The status of the data source. Valid values:
     *
     *   1: The data source is accessible.
     *   2: The data source is inaccessible.
     *
     * @example 1
     *
     * @var int
     */
    public $connectStatus;

    /**
     * @description The data connection string. The value of this parameter is in the JSON format. Sample connection strings of common data sources:
     *
     *   MaxCompute
     *
     * "endpoint": "http://service.cn.maxcompute.aliyun-inc.com/api",
     * "accessKey": "***",
     * }
     *
     *   mysql
     *
     * "instanceName": "rm-xxxxxx",
     * "password": "***",
     * }
     *
     *   sqlserver
     *
     * "jdbcUrl": "jdbc:sqlserver://rm-xxxxx.sqlserver.rds.aliyuncs.com:1433;DatabaseName=sqlserver_db1",
     * "password": "***",
     * }
     *
     *   oss
     *
     * "accessId": "LTAINbR9Uxxxx",
     * "accessKey": "***",
     * }
     *
     *   postgresql
     *
     * "instanceName": "rm-xxxx",
     * "password": "***",
     * }
     *
     *   ads
     *
     * "configType": "1",
     * "password": "***",
     * }
     * @example {"pubEndpoint":"http://service.cn.maxcompute.aliyun.com/api","accessId":"TMP.3KecGjvzy3i8MYfn2BGHgF7EHGyBFZcHm7GgngrABVRyvvKQrfF5kskR36xP361C3dqwbGo7SGYptAeGyiTwHXqLaBUvYC","securityToken":null,"endpoint":"http://service.cn.maxcompute.aliyun-inc.com/api","accessKey":"***","name":"PRE_PROJECT_A_engine","project":"PRE_PROJECT_A","vpcEndpoint":"http://service.cn.maxcompute.aliyun-inc.com/api","region":"cn-shanghai","authType":"2"}
     *
     * @var string
     */
    public $content;

    /**
     * @description The type of the data source. Valid values:
     *
     *   odps
     *   mysql
     *   rds
     *   oss
     *   sqlserver
     *   polardb
     *   oracle
     *   mongodb
     *   emr
     *   postgresql
     *   analyticdb_for_mysql
     *   hybriddb_for_postgresql
     *   holo
     *
     * @example rds
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description Indicates whether the compute engine instance that is associated with the data source is the default compute engine instance used by data sources of the same type.
     *
     * @example false
     *
     * @var bool
     */
    public $defaultEngine;

    /**
     * @description The description of the data source.
     *
     * @example a connection
     *
     * @var string
     */
    public $description;

    /**
     * @description The environment in which the data source is used. Valid values:
     *
     *   0: development environment
     *   1: production environment
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The time when the data source was created. Example: Mar 17, 2021 4:09:32 PM.
     *
     * @example Mar 17, 2021 4:09:32 PM
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the data source was last modified. Example: Mar 17, 2021 4:09:32 PM.
     *
     * @example Mar 17, 2021 4:09:32 PM
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the data source.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the data source.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the Alibaba Cloud account that is used to last modify the data source.
     *
     * @example 193543050****
     *
     * @var string
     */
    public $operator;

    /**
     * @description The ID of the workspace to which the data source belongs.
     *
     * @example 123
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The field that is used to sort data sources. Data sources are sorted in descending order based on the value of this parameter.
     *
     * @example 300
     *
     * @var int
     */
    public $sequence;

    /**
     * @description Indicates whether the data source is a shared data source.
     *
     * @example false
     *
     * @var bool
     */
    public $shared;

    /**
     * @description The status of the data source. Valid values:
     *
     *   1: The data source is accessible.
     *   2: The data source is inaccessible.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The subtype of the data source. This parameter takes effect only if the DataSourceType parameter is set to rds.
     *
     * If the DataSourceType parameter is set to rds, this parameter can be set to mysql, sqlserver, or postgresql.
     * @example mysql
     *
     * @var string
     */
    public $subType;

    /**
     * @description The ID of the tenant.
     *
     * @example 1234567
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'bindingCalcEngineId' => 'BindingCalcEngineId',
        'connectStatus'       => 'ConnectStatus',
        'content'             => 'Content',
        'dataSourceType'      => 'DataSourceType',
        'defaultEngine'       => 'DefaultEngine',
        'description'         => 'Description',
        'envType'             => 'EnvType',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'id'                  => 'Id',
        'name'                => 'Name',
        'operator'            => 'Operator',
        'projectId'           => 'ProjectId',
        'sequence'            => 'Sequence',
        'shared'              => 'Shared',
        'status'              => 'Status',
        'subType'             => 'SubType',
        'tenantId'            => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindingCalcEngineId) {
            $res['BindingCalcEngineId'] = $this->bindingCalcEngineId;
        }
        if (null !== $this->connectStatus) {
            $res['ConnectStatus'] = $this->connectStatus;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->defaultEngine) {
            $res['DefaultEngine'] = $this->defaultEngine;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->shared) {
            $res['Shared'] = $this->shared;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindingCalcEngineId'])) {
            $model->bindingCalcEngineId = $map['BindingCalcEngineId'];
        }
        if (isset($map['ConnectStatus'])) {
            $model->connectStatus = $map['ConnectStatus'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['DefaultEngine'])) {
            $model->defaultEngine = $map['DefaultEngine'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['Shared'])) {
            $model->shared = $map['Shared'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
