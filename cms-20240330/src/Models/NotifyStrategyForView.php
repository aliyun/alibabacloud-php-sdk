<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\customTemplateEntries;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\groupingSetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\routes;

class NotifyStrategyForView extends Model
{
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
    public $notifyStrategyId;

    /**
     * @var string
     */
    public $notifyStrategyName;

    /**
     * @var routes[]
     */
    public $routes;

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
    protected $_name = [
        'createTime' => 'createTime',
        'customTemplateEntries' => 'customTemplateEntries',
        'description' => 'description',
        'enable' => 'enable',
        'groupingSetting' => 'groupingSetting',
        'ignoreRestoredNotification' => 'ignoreRestoredNotification',
        'notifyStrategyId' => 'notifyStrategyId',
        'notifyStrategyName' => 'notifyStrategyName',
        'routes' => 'routes',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->customTemplateEntries)) {
            Model::validateArray($this->customTemplateEntries);
        }
        if (null !== $this->groupingSetting) {
            $this->groupingSetting->validate();
        }
        if (\is_array($this->routes)) {
            Model::validateArray($this->routes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->customTemplateEntries) {
            if (\is_array($this->customTemplateEntries)) {
                $res['customTemplateEntries'] = [];
                $n1 = 0;
                foreach ($this->customTemplateEntries as $item1) {
                    $res['customTemplateEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->groupingSetting) {
            $res['groupingSetting'] = null !== $this->groupingSetting ? $this->groupingSetting->toArray($noStream) : $this->groupingSetting;
        }

        if (null !== $this->ignoreRestoredNotification) {
            $res['ignoreRestoredNotification'] = $this->ignoreRestoredNotification;
        }

        if (null !== $this->notifyStrategyId) {
            $res['notifyStrategyId'] = $this->notifyStrategyId;
        }

        if (null !== $this->notifyStrategyName) {
            $res['notifyStrategyName'] = $this->notifyStrategyName;
        }

        if (null !== $this->routes) {
            if (\is_array($this->routes)) {
                $res['routes'] = [];
                $n1 = 0;
                foreach ($this->routes as $item1) {
                    $res['routes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['customTemplateEntries'])) {
            if (!empty($map['customTemplateEntries'])) {
                $model->customTemplateEntries = [];
                $n1 = 0;
                foreach ($map['customTemplateEntries'] as $item1) {
                    $model->customTemplateEntries[$n1++] = customTemplateEntries::fromMap($item1);
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['groupingSetting'])) {
            $model->groupingSetting = groupingSetting::fromMap($map['groupingSetting']);
        }

        if (isset($map['ignoreRestoredNotification'])) {
            $model->ignoreRestoredNotification = $map['ignoreRestoredNotification'];
        }

        if (isset($map['notifyStrategyId'])) {
            $model->notifyStrategyId = $map['notifyStrategyId'];
        }

        if (isset($map['notifyStrategyName'])) {
            $model->notifyStrategyName = $map['notifyStrategyName'];
        }

        if (isset($map['routes'])) {
            if (!empty($map['routes'])) {
                $model->routes = [];
                $n1 = 0;
                foreach ($map['routes'] as $item1) {
                    $model->routes[$n1++] = routes::fromMap($item1);
                }
            }
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

        return $model;
    }
}
