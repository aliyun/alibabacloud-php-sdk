<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponseBody\data;

use AlibabaCloud\Tea\Model;

class calcEngines extends Model
{
    /**
     * @description The ID of the workspace with which the compute engine instance is associated.
     *
     * @example 27
     *
     * @var int
     */
    public $bindingProjectId;

    /**
     * @description The name of the workspace with which the compute engine instance is associated.
     *
     * @example abc
     *
     * @var string
     */
    public $bindingProjectName;

    /**
     * @description The type of the compute engine instance. Valid values: `ODPS`, `EMR`, `BLINK`, `HOLO`, `MaxGraph`, `HYBRIDDB_FOR_POSTGRESQL`, `ADB_MYSQL`, and `HADOOP_CDH`.
     *
     * @example ODPS
     *
     * @var string
     */
    public $calcEngineType;

    /**
     * @description The region ID of the DataWorks workspace with which the compute engine instance is associated.
     *
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $dwRegion;

    /**
     * @description The ID of the compute engine instance.
     *
     * @example 35
     *
     * @var int
     */
    public $engineId;

    /**
     * @description The details of the compute engine instance.
     *
     *   ODPS
     *
     * "resourceGroupType": "ODPS",
     * "resourceGroupId": "361826516****",
     * }
     *
     *   EMR
     *
     * }
     *
     *   BLINK
     *
     * }
     *
     *   HOLO
     *
     * }
     *
     *   MaxGraph
     *
     * }
     *
     *   HYBRIDDB_FOR_POSTGRESQL
     *
     * }
     *
     *   ADB_MYSQL
     *
     * }
     *
     *   HADOOP_CDH
     *
     * }
     * @example {"pubEndpoint":"http://service.cn.maxcompute.aliyun.com/api","endpoint":"http://service.cn.maxcompute.aliyun-inc.com/api","resourceGroupType":"ODPS","resourceGroupId":"361826516****","vpcEndpoint":"http://service.cn.maxcompute.aliyun-inc.com/api","projectName":"onefall_test_zjk","taskSameAsOwner":"true"}
     *
     * @var mixed[]
     */
    public $engineInfo;

    /**
     * @description The environment in which the compute engine instance runs. Valid values:
     *
     *   DEV: development environment
     *   PRD: production environment
     *
     * @example PRD
     *
     * @var string
     */
    public $envType;

    /**
     * @description The time when the compute engine instance was created. This value is a timestamp.
     *
     * @example Oct 10, 2019 3:42:44 PM
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description Indicates whether the compute engine instance is the default instance of the current compute engine type.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The display name of the compute engine instance.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region in which the compute engine instance resides.
     *
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $region;

    /**
     * @description The identity that is used to access the compute engine instance. Valid values:
     *
     *   USER: current user
     *   PROJECT: workspace executor
     *   SUBACCOUNT: RAM user
     *   STS_ROLE: Security Token Service (STS) role
     *
     * @example PROJECT
     *
     * @var string
     */
    public $taskAuthType;

    /**
     * @description The ID of the tenant.
     *
     * @example 1234567
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'bindingProjectId'   => 'BindingProjectId',
        'bindingProjectName' => 'BindingProjectName',
        'calcEngineType'     => 'CalcEngineType',
        'dwRegion'           => 'DwRegion',
        'engineId'           => 'EngineId',
        'engineInfo'         => 'EngineInfo',
        'envType'            => 'EnvType',
        'gmtCreate'          => 'GmtCreate',
        'isDefault'          => 'IsDefault',
        'name'               => 'Name',
        'region'             => 'Region',
        'taskAuthType'       => 'TaskAuthType',
        'tenantId'           => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindingProjectId) {
            $res['BindingProjectId'] = $this->bindingProjectId;
        }
        if (null !== $this->bindingProjectName) {
            $res['BindingProjectName'] = $this->bindingProjectName;
        }
        if (null !== $this->calcEngineType) {
            $res['CalcEngineType'] = $this->calcEngineType;
        }
        if (null !== $this->dwRegion) {
            $res['DwRegion'] = $this->dwRegion;
        }
        if (null !== $this->engineId) {
            $res['EngineId'] = $this->engineId;
        }
        if (null !== $this->engineInfo) {
            $res['EngineInfo'] = $this->engineInfo;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->taskAuthType) {
            $res['TaskAuthType'] = $this->taskAuthType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return calcEngines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindingProjectId'])) {
            $model->bindingProjectId = $map['BindingProjectId'];
        }
        if (isset($map['BindingProjectName'])) {
            $model->bindingProjectName = $map['BindingProjectName'];
        }
        if (isset($map['CalcEngineType'])) {
            $model->calcEngineType = $map['CalcEngineType'];
        }
        if (isset($map['DwRegion'])) {
            $model->dwRegion = $map['DwRegion'];
        }
        if (isset($map['EngineId'])) {
            $model->engineId = $map['EngineId'];
        }
        if (isset($map['EngineInfo'])) {
            $model->engineInfo = $map['EngineInfo'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TaskAuthType'])) {
            $model->taskAuthType = $map['TaskAuthType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
