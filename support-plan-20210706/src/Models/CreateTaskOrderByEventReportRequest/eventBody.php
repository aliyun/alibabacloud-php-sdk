<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderByEventReportRequest;

use AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderByEventReportRequest\eventBody\eventLocation;
use AlibabaCloud\Tea\Model;

class eventBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 告警内容
     *
     * @var string
     */
    public $eventDesc;

    /**
     * @example j9uwe-34328987
     *
     * @var string
     */
    public $eventId;

    /**
     * @example info,warn,alarm,critical
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @var eventLocation
     */
    public $eventLocation;

    /**
     * @example 123456
     *
     * @var string
     */
    public $eventTime;
    protected $_name = [
        'eventDesc'     => 'EventDesc',
        'eventId'       => 'EventId',
        'eventLevel'    => 'EventLevel',
        'eventLocation' => 'EventLocation',
        'eventTime'     => 'EventTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventDesc) {
            $res['EventDesc'] = $this->eventDesc;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventLocation) {
            $res['EventLocation'] = null !== $this->eventLocation ? $this->eventLocation->toMap() : null;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventDesc'])) {
            $model->eventDesc = $map['EventDesc'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['EventLocation'])) {
            $model->eventLocation = eventLocation::fromMap($map['EventLocation']);
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }

        return $model;
    }
}
