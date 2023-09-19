<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateStateConfigurationShrinkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example DASKJJLKADS-AHKLJHJSAKL-AJK
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The configuration mode. Valid values: ApplyOnce: The configuration is applied only once. After a configuration is updated, the new configuration is applied. ApplyAndMonitor: The configuration is applied only once. After the configuration is applied, the system only checks whether the configuration is migrated in the future. ApplyAndAutoCorrect: The configuration is always applied.
     *
     * @example ApplyOnce
     *
     * @var string
     */
    public $configureMode;

    /**
     * @description The description.
     *
     * @example ACS-ECS-InventoryDataCollection
     *
     * @var string
     */
    public $description;

    /**
     * @description The parameters.
     *
     * @example { "policy": { "ACS:Application": { "Collection": "Enabled" }, "ACS:Network": { "Collection": "Enabled" } } }
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The schedule expression.
     *
     * @example 1 hour
     *
     * @var string
     */
    public $scheduleExpression;

    /**
     * @description The schedule type.
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
     * @description The tags to be added to the configuration.
     *
     * @example {"Key": "oos", "Value": "sc"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The resources to be queried.
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
        'parametersShrink'     => 'Parameters',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'scheduleExpression'   => 'ScheduleExpression',
        'scheduleType'         => 'ScheduleType',
        'stateConfigurationId' => 'StateConfigurationId',
        'tagsShrink'           => 'Tags',
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
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
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
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->targets) {
            $res['Targets'] = $this->targets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStateConfigurationShrinkRequest
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
            $model->parametersShrink = $map['Parameters'];
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
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['Targets'])) {
            $model->targets = $map['Targets'];
        }

        return $model;
    }
}
