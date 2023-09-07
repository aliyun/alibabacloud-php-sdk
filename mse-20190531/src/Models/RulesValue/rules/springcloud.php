<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules;

use AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules\springcloud\restItems;
use AlibabaCloud\Tea\Model;

class springcloud extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var restItems[]
     */
    public $restItems;

    /**
     * @var string
     */
    public $triggerPolicy;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'condition'     => 'condition',
        'restItems'     => 'restItems',
        'triggerPolicy' => 'triggerPolicy',
        'enable'        => 'enable',
        'appId'         => 'appId',
        'priority'      => 'priority',
        'tags'          => 'tags',
        'paths'         => 'paths',
        'path'          => 'path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
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
        if (null !== $this->triggerPolicy) {
            $res['triggerPolicy'] = $this->triggerPolicy;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->paths) {
            $res['paths'] = $this->paths;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
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
        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
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
        if (isset($map['triggerPolicy'])) {
            $model->triggerPolicy = $map['triggerPolicy'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = $map['tags'];
            }
        }
        if (isset($map['paths'])) {
            if (!empty($map['paths'])) {
                $model->paths = $map['paths'];
            }
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}
