<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CreateStateConfigurationShrinkRequest extends Model
{
    /**
     * @description The description of the desired-state configuration.
     *
     * @example DASKJJLKADS-AHKLJHJSAKL-AJK
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 收集Inventory数据
     *
     * @example ApplyOnce
     *
     * @var string
     */
    public $configureMode;

    /**
     * @description The configuration mode.
     *
     * ApplyAndAutoCorrect: The configuration is always applied.
     * @example The region ID.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of resource group.
     *
     * @example {     "policy": {       "ACS:Application": {         "Collection": "Enabled"       },       "ACS:Network": {         "Collection": "Enabled"       }     }   }
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The ID of the template.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the schedule. Valid value: rate.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The description.
     *
     * @example The ID of the resource group.
     *
     * @var string
     */
    public $scheduleExpression;

    /**
     * @description The schedule expression.
     *
     * @example rate
     *
     * @var string
     */
    public $scheduleType;

    /**
     * @description The name of the template. The name must be 1 to 200 characters in length, and can contain letters, digits, hyphens (-), and underscores (\_).
     *
     * @example {"Key": "oos", "Value": "inventory"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The schedule expression. The interval between two schedules must be a minimum of 30 minutes.
     *
     * @example {     "ResourceType": "ALIYUN::ECS::Instance",     "Filters": [       {         "Type": "All",         "RegionId": "cn-hangzhou",         "Parameters": {           "RegionId": "cn-hangzhou",           "Status": "Running"         }       }     ]   }
     *
     * @var string
     */
    public $targets;

    /**
     * @description The version of the template.
     *
     * @example ACS-ECS-InventoryDataCollection
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The required resources.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'configureMode'      => 'ConfigureMode',
        'description'        => 'Description',
        'parameters'         => 'Parameters',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'scheduleExpression' => 'ScheduleExpression',
        'scheduleType'       => 'ScheduleType',
        'tagsShrink'         => 'Tags',
        'targets'            => 'Targets',
        'templateName'       => 'TemplateName',
        'templateVersion'    => 'TemplateVersion',
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
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->targets) {
            $res['Targets'] = $this->targets;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStateConfigurationShrinkRequest
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
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['Targets'])) {
            $model->targets = $map['Targets'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
