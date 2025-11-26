<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\customTemplateEntries;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\groupingSetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\pushingSetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\repeatNotifySetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\routes;

class NotifyStrategyForView extends Model
{
    /**
     * @var int
     */
    public $autoRecoverSeconds;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var customTemplateEntries[]
     */
    public $customTemplateEntries;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @var groupingSetting
     */
    public $groupingSetting;

    /**
     * @var bool
     */
    public $ignoreRestoredNotification;

    /**
     * @var mixed[]
     */
    public $incidentEscalationPolicies;

    /**
     * @var string
     */
    public $notifyStrategyId;

    /**
     * @var string
     */
    public $notifyStrategyName;

    /**
     * @var pushingSetting
     */
    public $pushingSetting;

    /**
     * @var string[]
     */
    public $receiverNames;

    /**
     * @var repeatNotifySetting
     */
    public $repeatNotifySetting;

    /**
     * @var routes[]
     */
    public $routes;

    /**
     * @var string
     */
    public $syncFromType;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspace;

    /**
     * @var WorkspaceFilterSetting
     */
    public $workspaceFilterSetting;
    protected $_name = [
        'autoRecoverSeconds' => 'autoRecoverSeconds',
        'createTime' => 'createTime',
        'customTemplateEntries' => 'customTemplateEntries',
        'description' => 'description',
        'enable' => 'enable',
        'filterSetting' => 'filterSetting',
        'groupingSetting' => 'groupingSetting',
        'ignoreRestoredNotification' => 'ignoreRestoredNotification',
        'incidentEscalationPolicies' => 'incidentEscalationPolicies',
        'notifyStrategyId' => 'notifyStrategyId',
        'notifyStrategyName' => 'notifyStrategyName',
        'pushingSetting' => 'pushingSetting',
        'receiverNames' => 'receiverNames',
        'repeatNotifySetting' => 'repeatNotifySetting',
        'routes' => 'routes',
        'syncFromType' => 'syncFromType',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'workspace' => 'workspace',
        'workspaceFilterSetting' => 'workspaceFilterSetting',
    ];

    public function validate()
    {
        if (\is_array($this->customTemplateEntries)) {
            Model::validateArray($this->customTemplateEntries);
        }
        if (null !== $this->filterSetting) {
            $this->filterSetting->validate();
        }
        if (null !== $this->groupingSetting) {
            $this->groupingSetting->validate();
        }
        if (\is_array($this->incidentEscalationPolicies)) {
            Model::validateArray($this->incidentEscalationPolicies);
        }
        if (null !== $this->pushingSetting) {
            $this->pushingSetting->validate();
        }
        if (\is_array($this->receiverNames)) {
            Model::validateArray($this->receiverNames);
        }
        if (null !== $this->repeatNotifySetting) {
            $this->repeatNotifySetting->validate();
        }
        if (\is_array($this->routes)) {
            Model::validateArray($this->routes);
        }
        if (null !== $this->workspaceFilterSetting) {
            $this->workspaceFilterSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRecoverSeconds) {
            $res['autoRecoverSeconds'] = $this->autoRecoverSeconds;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->customTemplateEntries) {
            if (\is_array($this->customTemplateEntries)) {
                $res['customTemplateEntries'] = [];
                $n1 = 0;
                foreach ($this->customTemplateEntries as $item1) {
                    $res['customTemplateEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toArray($noStream) : $this->filterSetting;
        }

        if (null !== $this->groupingSetting) {
            $res['groupingSetting'] = null !== $this->groupingSetting ? $this->groupingSetting->toArray($noStream) : $this->groupingSetting;
        }

        if (null !== $this->ignoreRestoredNotification) {
            $res['ignoreRestoredNotification'] = $this->ignoreRestoredNotification;
        }

        if (null !== $this->incidentEscalationPolicies) {
            if (\is_array($this->incidentEscalationPolicies)) {
                $res['incidentEscalationPolicies'] = [];
                $n1 = 0;
                foreach ($this->incidentEscalationPolicies as $item1) {
                    $res['incidentEscalationPolicies'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notifyStrategyId) {
            $res['notifyStrategyId'] = $this->notifyStrategyId;
        }

        if (null !== $this->notifyStrategyName) {
            $res['notifyStrategyName'] = $this->notifyStrategyName;
        }

        if (null !== $this->pushingSetting) {
            $res['pushingSetting'] = null !== $this->pushingSetting ? $this->pushingSetting->toArray($noStream) : $this->pushingSetting;
        }

        if (null !== $this->receiverNames) {
            if (\is_array($this->receiverNames)) {
                $res['receiverNames'] = [];
                $n1 = 0;
                foreach ($this->receiverNames as $item1) {
                    $res['receiverNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->repeatNotifySetting) {
            $res['repeatNotifySetting'] = null !== $this->repeatNotifySetting ? $this->repeatNotifySetting->toArray($noStream) : $this->repeatNotifySetting;
        }

        if (null !== $this->routes) {
            if (\is_array($this->routes)) {
                $res['routes'] = [];
                $n1 = 0;
                foreach ($this->routes as $item1) {
                    $res['routes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->syncFromType) {
            $res['syncFromType'] = $this->syncFromType;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        if (null !== $this->workspaceFilterSetting) {
            $res['workspaceFilterSetting'] = null !== $this->workspaceFilterSetting ? $this->workspaceFilterSetting->toArray($noStream) : $this->workspaceFilterSetting;
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
        if (isset($map['autoRecoverSeconds'])) {
            $model->autoRecoverSeconds = $map['autoRecoverSeconds'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['customTemplateEntries'])) {
            if (!empty($map['customTemplateEntries'])) {
                $model->customTemplateEntries = [];
                $n1 = 0;
                foreach ($map['customTemplateEntries'] as $item1) {
                    $model->customTemplateEntries[$n1] = customTemplateEntries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }

        if (isset($map['groupingSetting'])) {
            $model->groupingSetting = groupingSetting::fromMap($map['groupingSetting']);
        }

        if (isset($map['ignoreRestoredNotification'])) {
            $model->ignoreRestoredNotification = $map['ignoreRestoredNotification'];
        }

        if (isset($map['incidentEscalationPolicies'])) {
            if (!empty($map['incidentEscalationPolicies'])) {
                $model->incidentEscalationPolicies = [];
                $n1 = 0;
                foreach ($map['incidentEscalationPolicies'] as $item1) {
                    $model->incidentEscalationPolicies[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['notifyStrategyId'])) {
            $model->notifyStrategyId = $map['notifyStrategyId'];
        }

        if (isset($map['notifyStrategyName'])) {
            $model->notifyStrategyName = $map['notifyStrategyName'];
        }

        if (isset($map['pushingSetting'])) {
            $model->pushingSetting = pushingSetting::fromMap($map['pushingSetting']);
        }

        if (isset($map['receiverNames'])) {
            if (!empty($map['receiverNames'])) {
                $model->receiverNames = [];
                $n1 = 0;
                foreach ($map['receiverNames'] as $item1) {
                    $model->receiverNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['repeatNotifySetting'])) {
            $model->repeatNotifySetting = repeatNotifySetting::fromMap($map['repeatNotifySetting']);
        }

        if (isset($map['routes'])) {
            if (!empty($map['routes'])) {
                $model->routes = [];
                $n1 = 0;
                foreach ($map['routes'] as $item1) {
                    $model->routes[$n1] = routes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['syncFromType'])) {
            $model->syncFromType = $map['syncFromType'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        if (isset($map['workspaceFilterSetting'])) {
            $model->workspaceFilterSetting = WorkspaceFilterSetting::fromMap($map['workspaceFilterSetting']);
        }

        return $model;
    }
}
