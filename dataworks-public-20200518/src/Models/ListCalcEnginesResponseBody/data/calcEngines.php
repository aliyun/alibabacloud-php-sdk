<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponseBody\data;

use AlibabaCloud\Tea\Model;

class calcEngines extends Model
{
    /**
     * @var string
     */
    public $bindingProjectName;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $engineId;

    /**
     * @var string
     */
    public $dwRegion;

    /**
     * @var string
     */
    public $taskAuthType;

    /**
     * @var string
     */
    public $calcEngineType;

    /**
     * @var mixed[]
     */
    public $engineInfo;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $bindingProjectId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'bindingProjectName' => 'BindingProjectName',
        'isDefault'          => 'IsDefault',
        'engineId'           => 'EngineId',
        'dwRegion'           => 'DwRegion',
        'taskAuthType'       => 'TaskAuthType',
        'calcEngineType'     => 'CalcEngineType',
        'engineInfo'         => 'EngineInfo',
        'envType'            => 'EnvType',
        'region'             => 'Region',
        'gmtCreate'          => 'GmtCreate',
        'bindingProjectId'   => 'BindingProjectId',
        'name'               => 'Name',
        'tenantId'           => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindingProjectName) {
            $res['BindingProjectName'] = $this->bindingProjectName;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->engineId) {
            $res['EngineId'] = $this->engineId;
        }
        if (null !== $this->dwRegion) {
            $res['DwRegion'] = $this->dwRegion;
        }
        if (null !== $this->taskAuthType) {
            $res['TaskAuthType'] = $this->taskAuthType;
        }
        if (null !== $this->calcEngineType) {
            $res['CalcEngineType'] = $this->calcEngineType;
        }
        if (null !== $this->engineInfo) {
            $res['EngineInfo'] = $this->engineInfo;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->bindingProjectId) {
            $res['BindingProjectId'] = $this->bindingProjectId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['BindingProjectName'])) {
            $model->bindingProjectName = $map['BindingProjectName'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['EngineId'])) {
            $model->engineId = $map['EngineId'];
        }
        if (isset($map['DwRegion'])) {
            $model->dwRegion = $map['DwRegion'];
        }
        if (isset($map['TaskAuthType'])) {
            $model->taskAuthType = $map['TaskAuthType'];
        }
        if (isset($map['CalcEngineType'])) {
            $model->calcEngineType = $map['CalcEngineType'];
        }
        if (isset($map['EngineInfo'])) {
            $model->engineInfo = $map['EngineInfo'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['BindingProjectId'])) {
            $model->bindingProjectId = $map['BindingProjectId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
