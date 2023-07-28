<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\CreateStateConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class stateConfiguration extends Model
{
    /**
     * @description The parameters.
     *
     * @example ApplyAndAutoCorrect
     *
     * @var string
     */
    public $configureMode;

    /**
     * @description The desired-state configuration.
     *
     * @example 2021-03-22T03:13:32Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description WB502027
     *
     * @example 尹存锟
     *
     * @var string
     */
    public $description;

    /**
     * @description CreateStateConfiguration
     *
     * @example {"policy": {"ACS:Network": {"Collection": "Enabled"}, "ACS:Application": {"Collection": "Enabled"}}}
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The version number. If you do not specify this parameter, the system uses the latest version.
     *
     * @example 1 hour
     *
     * @var string
     */
    public $scheduleExpression;

    /**
     * @description Creates a desired-state configuration.
     *
     * @example rate
     *
     * @var string
     */
    public $scheduleType;

    /**
     * @description 收集Inventory数据
     *
     * @example sc-a538febe18fabcdef
     *
     * @var string
     */
    public $stateConfigurationId;

    /**
     * @description The required resources.
     *
     * @example {"Key": "oos", "Value": "inventory"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description 1 hour 或 30 minutes
     *
     * @example {     "ResourceType": "ALIYUN::ECS::Instance",     "Filters": [       {         "Type": "All",         "RegionId": "cn-hangzhou",         "Parameters": {           "RegionId": "cn-hangzhou",           "Status": "Running"         }       }     ]   }
     *
     * @var string
     */
    public $targets;

    /**
     * @example t-1234asadf
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the template.
     *
     * @example ACS-ECS-InventoryDataCollection
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The ID of the request.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'configureMode'        => 'ConfigureMode',
        'createTime'           => 'CreateTime',
        'description'          => 'Description',
        'parameters'           => 'Parameters',
        'resourceGroupId'      => 'ResourceGroupId',
        'scheduleExpression'   => 'ScheduleExpression',
        'scheduleType'         => 'ScheduleType',
        'stateConfigurationId' => 'StateConfigurationId',
        'tags'                 => 'Tags',
        'targets'              => 'Targets',
        'templateId'           => 'TemplateId',
        'templateName'         => 'TemplateName',
        'templateVersion'      => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configureMode) {
            $res['ConfigureMode'] = $this->configureMode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
     * @return stateConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigureMode'])) {
            $model->configureMode = $map['ConfigureMode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
