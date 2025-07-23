<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\customTemplateEntries;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\groupingSetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForView\routes;
use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @var string
     */
    public $notifyStrategyName;

    /**
     * @description This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->customTemplateEntries) {
            $res['customTemplateEntries'] = [];
            if (null !== $this->customTemplateEntries && \is_array($this->customTemplateEntries)) {
                $n = 0;
                foreach ($this->customTemplateEntries as $item) {
                    $res['customTemplateEntries'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['groupingSetting'] = null !== $this->groupingSetting ? $this->groupingSetting->toMap() : null;
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
            $res['routes'] = [];
            if (null !== $this->routes && \is_array($this->routes)) {
                $n = 0;
                foreach ($this->routes as $item) {
                    $res['routes'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return NotifyStrategyForView
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['customTemplateEntries'])) {
            if (!empty($map['customTemplateEntries'])) {
                $model->customTemplateEntries = [];
                $n = 0;
                foreach ($map['customTemplateEntries'] as $item) {
                    $model->customTemplateEntries[$n++] = null !== $item ? customTemplateEntries::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['routes'] as $item) {
                    $model->routes[$n++] = null !== $item ? routes::fromMap($item) : $item;
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
