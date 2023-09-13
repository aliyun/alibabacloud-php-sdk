<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListAliyunOfficialEventSourcesResponseBody\data\eventSourceList;

use AlibabaCloud\Tea\Model;

class eventTypes extends Model
{
    /**
     * @description The name of the event source.
     *
     * @example name
     *
     * @var string
     */
    public $eventSourceName;

    /**
     * @description The name of the group to which the queried event type belongs.
     *
     * @example aliyuncvc:MeetingEvent
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The full name of the queried event type.
     *
     * @example aliyuncvc:MeetingEvent:MeetingStateEvent
     *
     * @var string
     */
    public $name;

    /**
     * @description The short name of the queried event type.
     *
     * @example MeetingStateEvent
     *
     * @var string
     */
    public $shortName;
    protected $_name = [
        'eventSourceName' => 'EventSourceName',
        'groupName'       => 'GroupName',
        'name'            => 'Name',
        'shortName'       => 'ShortName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventSourceName) {
            $res['EventSourceName'] = $this->eventSourceName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->shortName) {
            $res['ShortName'] = $this->shortName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventSourceName'])) {
            $model->eventSourceName = $map['EventSourceName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ShortName'])) {
            $model->shortName = $map['ShortName'];
        }

        return $model;
    }
}
