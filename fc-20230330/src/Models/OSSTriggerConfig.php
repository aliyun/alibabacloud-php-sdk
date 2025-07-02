<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class OSSTriggerConfig extends Model
{
    /**
     * @var string[]
     */
    public $events;

    /**
     * @var Filter
     */
    public $filter;
    protected $_name = [
        'events' => 'events',
        'filter' => 'filter',
    ];

    public function validate()
    {
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    $res['events'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->filter) {
            $res['filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
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
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['events'] as $item1) {
                    $model->events[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['filter'])) {
            $model->filter = Filter::fromMap($map['filter']);
        }

        return $model;
    }
}
