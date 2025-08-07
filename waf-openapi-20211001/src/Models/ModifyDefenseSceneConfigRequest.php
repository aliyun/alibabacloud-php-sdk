<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ModifyDefenseSceneConfigRequest extends Model
{
    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @var string
     */
    public $defenseScene;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'configKey' => 'ConfigKey',
        'configValue' => 'ConfigValue',
        'defenseScene' => 'DefenseScene',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }

        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }

        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
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
        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }

        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }

        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
