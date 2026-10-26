<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionRequest\items;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionRequest\resourceScope;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\UpdateInstanceInspectionRequest\schedule;

class UpdateInstanceInspectionRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var resourceScope
     */
    public $resourceScope;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var schedule
     */
    public $schedule;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'clientToken',
        'items' => 'items',
        'resourceScope' => 'resourceScope',
        'revision' => 'revision',
        'schedule' => 'schedule',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (null !== $this->resourceScope) {
            $this->resourceScope->validate();
        }
        if (null !== $this->schedule) {
            $this->schedule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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

        if (null !== $this->resourceScope) {
            $res['resourceScope'] = null !== $this->resourceScope ? $this->resourceScope->toArray($noStream) : $this->resourceScope;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
        }

        if (null !== $this->schedule) {
            $res['schedule'] = null !== $this->schedule ? $this->schedule->toArray($noStream) : $this->schedule;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
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

        if (isset($map['resourceScope'])) {
            $model->resourceScope = resourceScope::fromMap($map['resourceScope']);
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        if (isset($map['schedule'])) {
            $model->schedule = schedule::fromMap($map['schedule']);
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
