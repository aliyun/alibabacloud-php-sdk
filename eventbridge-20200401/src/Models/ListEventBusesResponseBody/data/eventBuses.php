<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventBusesResponseBody\data;

use AlibabaCloud\Tea\Model;

class eventBuses extends Model
{
    /**
     * @description The timestamp that indicates when the event bus was created.
     *
     * @example 1607071602000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The description of the queried event bus.
     *
     * @example bus_description
     *
     * @var string
     */
    public $description;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the queried event bus.
     *
     * @example acs:eventbridge:cn-hangzhou:123456789098***:eventbus/default
     *
     * @var string
     */
    public $eventBusARN;

    /**
     * @description The name of the queried event bus.
     *
     * @example default
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
     * @return eventBuses
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
