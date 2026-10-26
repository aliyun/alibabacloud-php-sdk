<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\config;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\items;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceInspectionResponseBody\lastRun;

class GetInstanceInspectionResponseBody extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var bool
     */
    public $configured;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var lastRun
     */
    public $lastRun;

    /**
     * @var string
     */
    public $nextRunAt;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $revision;
    protected $_name = [
        'config' => 'config',
        'configured' => 'configured',
        'instanceId' => 'instanceId',
        'items' => 'items',
        'lastRun' => 'lastRun',
        'nextRunAt' => 'nextRunAt',
        'regionId' => 'regionId',
        'revision' => 'revision',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (null !== $this->lastRun) {
            $this->lastRun->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->configured) {
            $res['configured'] = $this->configured;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastRun) {
            $res['lastRun'] = null !== $this->lastRun ? $this->lastRun->toArray($noStream) : $this->lastRun;
        }

        if (null !== $this->nextRunAt) {
            $res['nextRunAt'] = $this->nextRunAt;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['configured'])) {
            $model->configured = $map['configured'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['lastRun'])) {
            $model->lastRun = lastRun::fromMap($map['lastRun']);
        }

        if (isset($map['nextRunAt'])) {
            $model->nextRunAt = $map['nextRunAt'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        return $model;
    }
}
