<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomEventRequest;

use AlibabaCloud\Tea\Model;

class eventInfo extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example IOException
     *
     * @var string
     */
    public $content;

    /**
     * @description The time when the custom event occurred.
     *
     * >  You can also specify a UNIX timestamp. Example: 1552199984000. Unit: milliseconds.
     * @example myEvent
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 123456
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The content of the custom event. Valid values of N: 1 to 50.
     *
     * @example 20171013T170923.456+0800
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'content'   => 'Content',
        'eventName' => 'EventName',
        'groupId'   => 'GroupId',
        'time'      => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
