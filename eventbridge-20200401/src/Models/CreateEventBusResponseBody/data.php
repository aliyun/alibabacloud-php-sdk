<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventBusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the event bus.
     *
     * @example acs:eventbridge:cn-hangzhou:123456789098****:eventbus/MyEventBus
     *
     * @var string
     */
    public $eventBusARN;
    protected $_name = [
        'eventBusARN' => 'EventBusARN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBusARN) {
            $res['EventBusARN'] = $this->eventBusARN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBusARN'])) {
            $model->eventBusARN = $map['EventBusARN'];
        }

        return $model;
    }
}
