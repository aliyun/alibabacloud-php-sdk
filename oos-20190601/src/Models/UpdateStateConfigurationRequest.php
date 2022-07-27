<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

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
        'clientToken'          => 'ClientToken',
        'configureMode'        => 'ConfigureMode',
        'description'          => 'Description',
        'parameters'           => 'Parameters',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'scheduleExpression'   => 'ScheduleExpression',
        'scheduleType'         => 'ScheduleType',
        'stateConfigurationId' => 'StateConfigurationId',
        'tags'                 => 'Tags',
        'targets'              => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Parameters'] = $this->parameters;
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
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->targets) {
            $res['Targets'] = $this->targets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStateConfigurationRequest
     */
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
            $model->parameters = $map['Parameters'];
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
            $model->tags = $map['Tags'];
        }
        if (isset($map['Targets'])) {
            $model->targets = $map['Targets'];
        }

        return $model;
    }
}
