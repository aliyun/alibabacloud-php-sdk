<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeStrictEventNameResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Alarm name.
     *
     * @example System log abnormal deletion
     *
     * @var string
     */
    public $eventName;

    /**
     * @description Alarm type.
     *
     * @example Suspicious Process
     *
     * @var string
     */
    public $eventType;

    /**
     * @description Displayed alarm name.
     *
     * @example Suspicious Process
     *
     * @var string
     */
    public $showEventName;

    /**
     * @description Displayed alarm type.
     *
     * @example System log abnormal deletion
     *
     * @var string
     */
    public $showEventType;

    /**
     * @description Indicates whether the user has enabled the strict mode for this alarm type.
     * - false: Not enabled
     * @example true
     *
     * @var bool
     */
    public $switchConfig;
    protected $_name = [
        'eventName'     => 'EventName',
        'eventType'     => 'EventType',
        'showEventName' => 'ShowEventName',
        'showEventType' => 'ShowEventType',
        'switchConfig'  => 'SwitchConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
