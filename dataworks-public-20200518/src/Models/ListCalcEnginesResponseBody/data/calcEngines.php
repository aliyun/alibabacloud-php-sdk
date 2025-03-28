<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponseBody\data;

use AlibabaCloud\Dara\Model;

class calcEngines extends Model
{
    /**
     * @var int
     */
    public $bindingProjectId;

    /**
     * @var string
     */
    public $bindingProjectName;

    /**
     * @var string
     */
    public $calcEngineType;

    /**
     * @var string
     */
    public $dwRegion;

    /**
     * @var int
     */
    public $engineId;

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
    public $gmtCreate;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $taskAuthType;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'bindingProjectId' => 'BindingProjectId',
        'bindingProjectName' => 'BindingProjectName',
        'calcEngineType' => 'CalcEngineType',
        'dwRegion' => 'DwRegion',
        'engineId' => 'EngineId',
        'engineInfo' => 'EngineInfo',
        'envType' => 'EnvType',
        'gmtCreate' => 'GmtCreate',
        'isDefault' => 'IsDefault',
        'name' => 'Name',
        'region' => 'Region',
        'taskAuthType' => 'TaskAuthType',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->engineInfo)) {
            Model::validateArray($this->engineInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->engineInfo)) {
                $res['EngineInfo'] = [];
                foreach ($this->engineInfo as $key1 => $value1) {
                    $res['EngineInfo'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['EngineInfo'])) {
                $model->engineInfo = [];
                foreach ($map['EngineInfo'] as $key1 => $value1) {
                    $model->engineInfo[$key1] = $value1;
                }
            }
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
