<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponseBody\data;

use AlibabaCloud\Tea\Model;

class calcEngines extends Model
{
    /**
     * @description The ID of the workspace with which the compute engine is associated.
     *
     * @example 27
     *
     * @var int
     */
    public $bindingProjectId;

    /**
     * @description The name of the workspace with which the compute engine is associated.
     *
     * @example abc
     *
     * @var string
     */
    public $bindingProjectName;

    /**
     * @description The type of the compute engine.
     *
     * @example ODPS
     *
     * @var string
     */
    public $calcEngineType;

    /**
     * @description The region where the DataWorks workspace with which the compute engine is associated resides.
     *
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $dwRegion;

    /**
     * @description The compute engine ID.
     *
     * @example 35
     *
     * @var int
     */
    public $engineId;

    /**
     * @description The details of the compute engine.
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
     * @description The environment in which the compute engine is used. Valid values:
     *
     *   **DEV**
     *   **PRD**
     *
     * @example PRD
     *
     * @var string
     */
    public $envType;

    /**
     * @description The time when the compute engine was created.
     *
     * @example Oct 10, 2019 3:42:44 PM
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description Indicates whether the compute engine is the default engine of the current type.
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The display name of the compute engine.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The region where the compute engine resides.
     *
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $region;

    /**
     * @description The identity that is used to access the compute engine. Valid values:
     *
     *   **USER**: the current user
     *   **PROJECT**: the workspace executor
     *   **SUBACCOUNT**: a RAM user
     *   **STS_ROLE**: the Security Token Service (STS) role
     *
     * @example PROJECT
     *
     * @var string
     */
    public $taskAuthType;

    /**
     * @description The tenant ID.
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
