<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class CDNTriggerConfig extends Model
{
    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventVersion;

    /**
     * @var string[][]
     */
    public $filter;

    /**
     * @var string
     */
    public $notes;
    protected $_name = [
        'eventName' => 'eventName',
        'eventVersion' => 'eventVersion',
        'filter' => 'filter',
        'notes' => 'notes',
    ];

    public function validate()
    {
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }

        if (null !== $this->eventVersion) {
            $res['eventVersion'] = $this->eventVersion;
        }

        if (null !== $this->filter) {
            if (\is_array($this->filter)) {
                $res['filter'] = [];
                foreach ($this->filter as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['filter'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['filter'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->notes) {
            $res['notes'] = $this->notes;
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
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }

        if (isset($map['eventVersion'])) {
            $model->eventVersion = $map['eventVersion'];
        }

        if (isset($map['filter'])) {
            if (!empty($map['filter'])) {
                $model->filter = [];
                foreach ($map['filter'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->filter[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->filter[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['notes'])) {
            $model->notes = $map['notes'];
        }

        return $model;
    }
}
