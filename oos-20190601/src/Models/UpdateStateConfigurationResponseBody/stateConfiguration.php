<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\UpdateStateConfigurationResponseBody;

use AlibabaCloud\Dara\Model;

class stateConfiguration extends Model
{
    /**
     * @var string
     */
    public $configureMode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $parameters;

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

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'configureMode' => 'ConfigureMode',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'parameters' => 'Parameters',
        'resourceGroupId' => 'ResourceGroupId',
        'scheduleExpression' => 'ScheduleExpression',
        'scheduleType' => 'ScheduleType',
        'stateConfigurationId' => 'StateConfigurationId',
        'tags' => 'Tags',
        'targets' => 'Targets',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateVersion' => 'TemplateVersion',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
