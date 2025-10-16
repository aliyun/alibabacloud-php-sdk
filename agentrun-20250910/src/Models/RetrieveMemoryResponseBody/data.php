<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\RetrieveMemoryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[][]
     */
    public $events;

    /**
     * @var string[][]
     */
    public $memories;
    protected $_name = [
        'events' => 'events',
        'memories' => 'memories',
    ];

    public function validate()
    {
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (\is_array($this->memories)) {
            Model::validateArray($this->memories);
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
                    if (\is_array($item1)) {
                        $res['events'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['events'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->memories) {
            if (\is_array($this->memories)) {
                $res['memories'] = [];
                $n1 = 0;
                foreach ($this->memories as $item1) {
                    if (\is_array($item1)) {
                        $res['memories'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['memories'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
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
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['events'] as $item1) {
                    if (!empty($item1)) {
                        $model->events[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->events[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['memories'])) {
            if (!empty($map['memories'])) {
                $model->memories = [];
                $n1 = 0;
                foreach ($map['memories'] as $item1) {
                    if (!empty($item1)) {
                        $model->memories[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->memories[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
