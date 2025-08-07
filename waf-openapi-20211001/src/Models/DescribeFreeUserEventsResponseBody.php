<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventsResponseBody\event;

class DescribeFreeUserEventsResponseBody extends Model
{
    /**
     * @var event[]
     */
    public $event;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'event' => 'Event',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->event)) {
            Model::validateArray($this->event);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->event) {
            if (\is_array($this->event)) {
                $res['Event'] = [];
                $n1 = 0;
                foreach ($this->event as $item1) {
                    $res['Event'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Event'])) {
            if (!empty($map['Event'])) {
                $model->event = [];
                $n1 = 0;
                foreach ($map['Event'] as $item1) {
                    $model->event[$n1] = event::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
