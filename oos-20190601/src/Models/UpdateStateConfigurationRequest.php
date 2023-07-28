<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateStateConfigurationRequest extends Model
{
    /**
     * @description The schedule type.
     *
     * @example DASKJJLKADS-AHKLJHJSAKL-AJK
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the desired-state configuration.
     *
     * @example ApplyOnce
     *
     * @var string
     */
    public $configureMode;

    /**
     * @description The schedule expression.
     *
     * @example ACS-ECS-InventoryDataCollection
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the region.
     *
     * @example { "policy": { "ACS:Application": { "Collection": "Enabled" }, "ACS:Network": { "Collection": "Enabled" } } }
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description The configuration mode.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The parameters.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the template.
     *
     * @example 1 hour
     *
     * @var string
     */
    public $scheduleExpression;

    /**
     * @description The ID of the resource group.
     *
     * @example rate
     *
     * @var string
     */
    public $scheduleType;

    /**
     * @description The ID of the desired-state configuration.
     *
     * @example sc-asfgdhj12345
     *
     * @var string
     */
    public $stateConfigurationId;

    /**
     * @description The tag.
     *
     * @example {"Key": "oos", "Value": "sc"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The required resources.
     *
     * @example { "ResourceType": "ALIYUN::ECS::Instance", "Filters": [ { "Type": "All", "RegionId": "cn-hangzhou", "Parameters": { "RegionId": "cn-hangzhou", "Status": "Running" } } ] }
     *
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
