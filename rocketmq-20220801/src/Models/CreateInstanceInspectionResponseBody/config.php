<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponseBody\config\items;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponseBody\config\resourceScope;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponseBody\config\schedule;

class config extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var resourceScope
     */
    public $resourceScope;

    /**
     * @var schedule
     */
    public $schedule;
    protected $_name = [
        'items' => 'items',
        'resourceScope' => 'resourceScope',
        'schedule' => 'schedule',
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

        if (null !== $this->schedule) {
            $res['schedule'] = null !== $this->schedule ? $this->schedule->toArray($noStream) : $this->schedule;
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

        if (isset($map['schedule'])) {
            $model->schedule = schedule::fromMap($map['schedule']);
        }

        return $model;
    }
}
