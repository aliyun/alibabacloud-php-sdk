<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementServiceVersionConfigRequest\mergeConfig;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementServiceVersionConfigRequest\recallConfig;

class UpdateRecallManagementServiceVersionConfigRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var mergeConfig
     */
    public $mergeConfig;

    /**
     * @var recallConfig
     */
    public $recallConfig;
    protected $_name = [
        'regionId' => 'RegionId',
        'configType' => 'ConfigType',
        'instanceId' => 'InstanceId',
        'mergeConfig' => 'MergeConfig',
        'recallConfig' => 'RecallConfig',
    ];

    public function validate()
    {
        if (null !== $this->mergeConfig) {
            $this->mergeConfig->validate();
        }
        if (null !== $this->recallConfig) {
            $this->recallConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mergeConfig) {
            $res['MergeConfig'] = null !== $this->mergeConfig ? $this->mergeConfig->toArray($noStream) : $this->mergeConfig;
        }

        if (null !== $this->recallConfig) {
            $res['RecallConfig'] = null !== $this->recallConfig ? $this->recallConfig->toArray($noStream) : $this->recallConfig;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MergeConfig'])) {
            $model->mergeConfig = mergeConfig::fromMap($map['MergeConfig']);
        }

        if (isset($map['RecallConfig'])) {
            $model->recallConfig = recallConfig::fromMap($map['RecallConfig']);
        }

        return $model;
    }
}
