<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutEventsRequest\eventList;

class PutEventsRequest extends Model
{
    /**
     * @var string
     */
    public $eventBusName;

    /**
     * @var eventList[]
     */
    public $eventList;
    protected $_name = [
        'eventBusName' => 'EventBusName',
        'eventList' => 'EventList',
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
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        if (null !== $this->eventList) {
            if (\is_array($this->eventList)) {
                $res['EventList'] = [];
                $n1 = 0;
                foreach ($this->eventList as $item1) {
                    $res['EventList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        if (isset($map['EventList'])) {
            if (!empty($map['EventList'])) {
                $model->eventList = [];
                $n1 = 0;
                foreach ($map['EventList'] as $item1) {
                    $model->eventList[$n1] = eventList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
