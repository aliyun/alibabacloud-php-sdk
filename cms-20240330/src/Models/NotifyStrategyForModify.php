<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\customTemplateEntries;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\groupingSetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\pushingSetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\repeatNotifySetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\routes;

class NotifyStrategyForModify extends Model
{
    /**
     * @var int
     */
    public $autoRecoverSeconds;

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
    public $enableIncidentManagement;

    /**
     * @var string[]
     */
    public $escalationId;

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
     * @var string
     */
    public $notifyStrategyName;

    /**
     * @var pushingSetting
     */
    public $pushingSetting;

    /**
     * @var repeatNotifySetting
     */
    public $repeatNotifySetting;

    /**
     * @var routes[]
     */
    public $routes;

    /**
     * @var WorkspaceFilterSetting
     */
    public $workspaceFilterSetting;
    protected $_name = [
        'autoRecoverSeconds' => 'autoRecoverSeconds',
        'customTemplateEntries' => 'customTemplateEntries',
        'description' => 'description',
        'enableIncidentManagement' => 'enableIncidentManagement',
        'escalationId' => 'escalationId',
        'filterSetting' => 'filterSetting',
        'groupingSetting' => 'groupingSetting',
        'ignoreRestoredNotification' => 'ignoreRestoredNotification',
        'notifyStrategyName' => 'notifyStrategyName',
        'pushingSetting' => 'pushingSetting',
        'repeatNotifySetting' => 'repeatNotifySetting',
        'routes' => 'routes',
        'workspaceFilterSetting' => 'workspaceFilterSetting',
    ];

    public function validate()
    {
        if (\is_array($this->customTemplateEntries)) {
            Model::validateArray($this->customTemplateEntries);
        }
        if (\is_array($this->escalationId)) {
            Model::validateArray($this->escalationId);
        }
        if (null !== $this->filterSetting) {
            $this->filterSetting->validate();
        }
        if (null !== $this->groupingSetting) {
            $this->groupingSetting->validate();
        }
        if (null !== $this->pushingSetting) {
            $this->pushingSetting->validate();
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

        if (null !== $this->enableIncidentManagement) {
            $res['enableIncidentManagement'] = $this->enableIncidentManagement;
        }

        if (null !== $this->escalationId) {
            if (\is_array($this->escalationId)) {
                $res['escalationId'] = [];
                $n1 = 0;
                foreach ($this->escalationId as $item1) {
                    $res['escalationId'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->notifyStrategyName) {
            $res['notifyStrategyName'] = $this->notifyStrategyName;
        }

        if (null !== $this->pushingSetting) {
            $res['pushingSetting'] = null !== $this->pushingSetting ? $this->pushingSetting->toArray($noStream) : $this->pushingSetting;
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

        if (isset($map['enableIncidentManagement'])) {
            $model->enableIncidentManagement = $map['enableIncidentManagement'];
        }

        if (isset($map['escalationId'])) {
            if (!empty($map['escalationId'])) {
                $model->escalationId = [];
                $n1 = 0;
                foreach ($map['escalationId'] as $item1) {
                    $model->escalationId[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['notifyStrategyName'])) {
            $model->notifyStrategyName = $map['notifyStrategyName'];
        }

        if (isset($map['pushingSetting'])) {
            $model->pushingSetting = pushingSetting::fromMap($map['pushingSetting']);
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

        if (isset($map['workspaceFilterSetting'])) {
            $model->workspaceFilterSetting = WorkspaceFilterSetting::fromMap($map['workspaceFilterSetting']);
        }

        return $model;
    }
}
