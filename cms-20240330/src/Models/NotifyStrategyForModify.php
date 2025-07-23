<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\customTemplateEntries;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\groupingSetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\routes;
use AlibabaCloud\Tea\Model;

class NotifyStrategyForModify extends Model
{
    /**
     * @var customTemplateEntries[]
     */
    public $customTemplateEntries;

    /**
     * @var string
     */
    public $description;

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
    protected $_name = [
        'customTemplateEntries' => 'customTemplateEntries',
        'description' => 'description',
        'groupingSetting' => 'groupingSetting',
        'ignoreRestoredNotification' => 'ignoreRestoredNotification',
        'notifyStrategyName' => 'notifyStrategyName',
        'routes' => 'routes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->groupingSetting) {
            $res['groupingSetting'] = null !== $this->groupingSetting ? $this->groupingSetting->toMap() : null;
        }
        if (null !== $this->ignoreRestoredNotification) {
            $res['ignoreRestoredNotification'] = $this->ignoreRestoredNotification;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NotifyStrategyForModify
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['groupingSetting'])) {
            $model->groupingSetting = groupingSetting::fromMap($map['groupingSetting']);
        }
        if (isset($map['ignoreRestoredNotification'])) {
            $model->ignoreRestoredNotification = $map['ignoreRestoredNotification'];
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

        return $model;
    }
}
