<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\customTemplateEntries;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\groupingSetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\routes;

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

        if (null !== $this->groupingSetting) {
            $res['groupingSetting'] = null !== $this->groupingSetting ? $this->groupingSetting->toArray($noStream) : $this->groupingSetting;
        }

        if (null !== $this->ignoreRestoredNotification) {
            $res['ignoreRestoredNotification'] = $this->ignoreRestoredNotification;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
                $n1 = 0;
                foreach ($map['routes'] as $item1) {
                    $model->routes[$n1++] = routes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
