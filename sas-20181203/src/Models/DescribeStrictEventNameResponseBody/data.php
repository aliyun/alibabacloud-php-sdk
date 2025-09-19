<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrictEventNameResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $showEventName;

    /**
     * @var string
     */
    public $showEventType;

    /**
     * @var bool
     */
    public $switchConfig;
    protected $_name = [
        'eventName' => 'EventName',
        'eventType' => 'EventType',
        'showEventName' => 'ShowEventName',
        'showEventType' => 'ShowEventType',
        'switchConfig' => 'SwitchConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->showEventName) {
            $res['ShowEventName'] = $this->showEventName;
        }

        if (null !== $this->showEventType) {
            $res['ShowEventType'] = $this->showEventType;
        }

        if (null !== $this->switchConfig) {
            $res['SwitchConfig'] = $this->switchConfig;
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
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['ShowEventName'])) {
            $model->showEventName = $map['ShowEventName'];
        }

        if (isset($map['ShowEventType'])) {
            $model->showEventType = $map['ShowEventType'];
        }

        if (isset($map['SwitchConfig'])) {
            $model->switchConfig = $map['SwitchConfig'];
        }

        return $model;
    }
}
