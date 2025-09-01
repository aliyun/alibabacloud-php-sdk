<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetAbnormalEventsCountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $eventList;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $value;
    protected $_name = [
        'eventList' => 'eventList',
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate()
    {
        if (\is_array($this->eventList)) {
            Model::validateArray($this->eventList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventList) {
            if (\is_array($this->eventList)) {
                $res['eventList'] = [];
                $n1 = 0;
                foreach ($this->eventList as $item1) {
                    $res['eventList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['eventList'])) {
            if (!empty($map['eventList'])) {
                $model->eventList = [];
                $n1 = 0;
                foreach ($map['eventList'] as $item1) {
                    $model->eventList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
