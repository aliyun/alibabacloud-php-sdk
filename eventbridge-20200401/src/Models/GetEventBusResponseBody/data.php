<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventBusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The timestamp that indicates when the event bus was created.
     *
     * @example 1641781825000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The description of the event bus.
     *
     * @example demo
     *
     * @var string
     */
    public $description;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the event bus.
     *
     * @example acs:eventbridge:cn-hangzhou:123456789098****:eventbus/MyEventBus
     *
     * @var string
     */
    public $eventBusARN;

    /**
     * @description The name of the event bus.
     *
     * @example MyEventBus
     *
     * @var string
     */
    public $eventBusName;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'description'     => 'Description',
        'eventBusARN'     => 'EventBusARN',
        'eventBusName'    => 'EventBusName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eventBusARN) {
            $res['EventBusARN'] = $this->eventBusARN;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
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
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EventBusARN'])) {
            $model->eventBusARN = $map['EventBusARN'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        return $model;
    }
}
