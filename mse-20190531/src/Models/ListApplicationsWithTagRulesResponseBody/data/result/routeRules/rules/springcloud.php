<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result\routeRules\rules;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result\routeRules\rules\springcloud\restItems;
use AlibabaCloud\Tea\Model;

class springcloud extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var restItems[]
     */
    public $restItems;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $triggerPolicy;
    protected $_name = [
        'appId'         => 'appId',
        'condition'     => 'condition',
        'enable'        => 'enable',
        'path'          => 'path',
        'paths'         => 'paths',
        'priority'      => 'priority',
        'restItems'     => 'restItems',
        'tags'          => 'tags',
        'triggerPolicy' => 'triggerPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->paths) {
            $res['paths'] = $this->paths;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->restItems) {
            $res['restItems'] = [];
            if (null !== $this->restItems && \is_array($this->restItems)) {
                $n = 0;
                foreach ($this->restItems as $item) {
                    $res['restItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->triggerPolicy) {
            $res['triggerPolicy'] = $this->triggerPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return springcloud
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['paths'])) {
            if (!empty($map['paths'])) {
                $model->paths = $map['paths'];
            }
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['restItems'])) {
            if (!empty($map['restItems'])) {
                $model->restItems = [];
                $n                = 0;
                foreach ($map['restItems'] as $item) {
                    $model->restItems[$n++] = null !== $item ? restItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = $map['tags'];
            }
        }
        if (isset($map['triggerPolicy'])) {
            $model->triggerPolicy = $map['triggerPolicy'];
        }

        return $model;
    }
}
