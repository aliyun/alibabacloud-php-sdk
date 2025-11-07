<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class UpdateStateConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $configureMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $scheduleExpression;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $stateConfigurationId;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $targets;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'configureMode' => 'ConfigureMode',
        'description' => 'Description',
        'parameters' => 'Parameters',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'scheduleExpression' => 'ScheduleExpression',
        'scheduleType' => 'ScheduleType',
        'stateConfigurationId' => 'StateConfigurationId',
        'tags' => 'Tags',
        'targets' => 'Targets',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->configureMode) {
            $res['ConfigureMode'] = $this->configureMode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->scheduleExpression) {
            $res['ScheduleExpression'] = $this->scheduleExpression;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->stateConfigurationId) {
            $res['StateConfigurationId'] = $this->stateConfigurationId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->targets) {
            $res['Targets'] = $this->targets;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConfigureMode'])) {
            $model->configureMode = $map['ConfigureMode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ScheduleExpression'])) {
            $model->scheduleExpression = $map['ScheduleExpression'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['StateConfigurationId'])) {
            $model->stateConfigurationId = $map['StateConfigurationId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['Targets'])) {
            $model->targets = $map['Targets'];
        }

        return $model;
    }
}
