<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class AlertRuleV2 extends Model
{
    /**
     * @var ActionIntegrationConfig
     */
    public $actionIntegrationConfig;

    /**
     * @var string[]
     */
    public $annotations;

    /**
     * @var ArmsIntegrationConfig
     */
    public $armsIntegrationConfig;

    /**
     * @var ConditionConfigUnified
     */
    public $conditionConfig;

    /**
     * @var string
     */
    public $contentTemplate;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var DatasourceConfigUnified
     */
    public $datasourceConfig;

    /**
     * @var string
     */
    public $datasourceType;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var NotifyConfigUnified
     */
    public $notifyConfig;

    /**
     * @var string
     */
    public $notifyStrategyId;

    /**
     * @var bool
     */
    public $observeResourceGlobalScope;

    /**
     * @var string[]
     */
    public $observeResourceList;

    /**
     * @var string
     */
    public $observeResourceType;

    /**
     * @var string
     */
    public $partitionKey;

    /**
     * @var QueryConfigUnified
     */
    public $queryConfig;

    /**
     * @var ScheduleConfigUnified
     */
    public $scheduleConfig;

    /**
     * @var string
     */
    public $severityLevels;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'actionIntegrationConfig' => 'actionIntegrationConfig',
        'annotations' => 'annotations',
        'armsIntegrationConfig' => 'armsIntegrationConfig',
        'conditionConfig' => 'conditionConfig',
        'contentTemplate' => 'contentTemplate',
        'createdAt' => 'createdAt',
        'datasourceConfig' => 'datasourceConfig',
        'datasourceType' => 'datasourceType',
        'displayName' => 'displayName',
        'enabled' => 'enabled',
        'labels' => 'labels',
        'notifyConfig' => 'notifyConfig',
        'notifyStrategyId' => 'notifyStrategyId',
        'observeResourceGlobalScope' => 'observeResourceGlobalScope',
        'observeResourceList' => 'observeResourceList',
        'observeResourceType' => 'observeResourceType',
        'partitionKey' => 'partitionKey',
        'queryConfig' => 'queryConfig',
        'scheduleConfig' => 'scheduleConfig',
        'severityLevels' => 'severityLevels',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'uuid' => 'uuid',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->actionIntegrationConfig) {
            $this->actionIntegrationConfig->validate();
        }
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (null !== $this->armsIntegrationConfig) {
            $this->armsIntegrationConfig->validate();
        }
        if (null !== $this->conditionConfig) {
            $this->conditionConfig->validate();
        }
        if (null !== $this->datasourceConfig) {
            $this->datasourceConfig->validate();
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->notifyConfig) {
            $this->notifyConfig->validate();
        }
        if (\is_array($this->observeResourceList)) {
            Model::validateArray($this->observeResourceList);
        }
        if (null !== $this->queryConfig) {
            $this->queryConfig->validate();
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionIntegrationConfig) {
            $res['actionIntegrationConfig'] = null !== $this->actionIntegrationConfig ? $this->actionIntegrationConfig->toArray($noStream) : $this->actionIntegrationConfig;
        }

        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['annotations'] = [];
                foreach ($this->annotations as $key1 => $value1) {
                    $res['annotations'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->armsIntegrationConfig) {
            $res['armsIntegrationConfig'] = null !== $this->armsIntegrationConfig ? $this->armsIntegrationConfig->toArray($noStream) : $this->armsIntegrationConfig;
        }

        if (null !== $this->conditionConfig) {
            $res['conditionConfig'] = null !== $this->conditionConfig ? $this->conditionConfig->toArray($noStream) : $this->conditionConfig;
        }

        if (null !== $this->contentTemplate) {
            $res['contentTemplate'] = $this->contentTemplate;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->datasourceConfig) {
            $res['datasourceConfig'] = null !== $this->datasourceConfig ? $this->datasourceConfig->toArray($noStream) : $this->datasourceConfig;
        }

        if (null !== $this->datasourceType) {
            $res['datasourceType'] = $this->datasourceType;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->notifyConfig) {
            $res['notifyConfig'] = null !== $this->notifyConfig ? $this->notifyConfig->toArray($noStream) : $this->notifyConfig;
        }

        if (null !== $this->notifyStrategyId) {
            $res['notifyStrategyId'] = $this->notifyStrategyId;
        }

        if (null !== $this->observeResourceGlobalScope) {
            $res['observeResourceGlobalScope'] = $this->observeResourceGlobalScope;
        }

        if (null !== $this->observeResourceList) {
            if (\is_array($this->observeResourceList)) {
                $res['observeResourceList'] = [];
                $n1 = 0;
                foreach ($this->observeResourceList as $item1) {
                    $res['observeResourceList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->observeResourceType) {
            $res['observeResourceType'] = $this->observeResourceType;
        }

        if (null !== $this->partitionKey) {
            $res['partitionKey'] = $this->partitionKey;
        }

        if (null !== $this->queryConfig) {
            $res['queryConfig'] = null !== $this->queryConfig ? $this->queryConfig->toArray($noStream) : $this->queryConfig;
        }

        if (null !== $this->scheduleConfig) {
            $res['scheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toArray($noStream) : $this->scheduleConfig;
        }

        if (null !== $this->severityLevels) {
            $res['severityLevels'] = $this->severityLevels;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['actionIntegrationConfig'])) {
            $model->actionIntegrationConfig = ActionIntegrationConfig::fromMap($map['actionIntegrationConfig']);
        }

        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                foreach ($map['annotations'] as $key1 => $value1) {
                    $model->annotations[$key1] = $value1;
                }
            }
        }

        if (isset($map['armsIntegrationConfig'])) {
            $model->armsIntegrationConfig = ArmsIntegrationConfig::fromMap($map['armsIntegrationConfig']);
        }

        if (isset($map['conditionConfig'])) {
            $model->conditionConfig = ConditionConfigUnified::fromMap($map['conditionConfig']);
        }

        if (isset($map['contentTemplate'])) {
            $model->contentTemplate = $map['contentTemplate'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['datasourceConfig'])) {
            $model->datasourceConfig = DatasourceConfigUnified::fromMap($map['datasourceConfig']);
        }

        if (isset($map['datasourceType'])) {
            $model->datasourceType = $map['datasourceType'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['notifyConfig'])) {
            $model->notifyConfig = NotifyConfigUnified::fromMap($map['notifyConfig']);
        }

        if (isset($map['notifyStrategyId'])) {
            $model->notifyStrategyId = $map['notifyStrategyId'];
        }

        if (isset($map['observeResourceGlobalScope'])) {
            $model->observeResourceGlobalScope = $map['observeResourceGlobalScope'];
        }

        if (isset($map['observeResourceList'])) {
            if (!empty($map['observeResourceList'])) {
                $model->observeResourceList = [];
                $n1 = 0;
                foreach ($map['observeResourceList'] as $item1) {
                    $model->observeResourceList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['observeResourceType'])) {
            $model->observeResourceType = $map['observeResourceType'];
        }

        if (isset($map['partitionKey'])) {
            $model->partitionKey = $map['partitionKey'];
        }

        if (isset($map['queryConfig'])) {
            $model->queryConfig = QueryConfigUnified::fromMap($map['queryConfig']);
        }

        if (isset($map['scheduleConfig'])) {
            $model->scheduleConfig = ScheduleConfigUnified::fromMap($map['scheduleConfig']);
        }

        if (isset($map['severityLevels'])) {
            $model->severityLevels = $map['severityLevels'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
