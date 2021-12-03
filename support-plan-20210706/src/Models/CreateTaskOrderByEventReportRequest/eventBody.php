<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderByEventReportRequest;

use AlibabaCloud\SDK\Supportplan\V20210706\Models\CreateTaskOrderByEventReportRequest\eventBody\eventLocation;
use AlibabaCloud\Tea\Model;

class eventBody extends Model
{
    /**
     * @description 当前告警描述信息
     *
     * @var string
     */
    public $eventDesc;

    /**
     * @description 事件id
     *
     * @var string
     */
    public $eventId;

    /**
     * @description 事件级别
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description 事件源标识，自定义和TAM在云企配置的Location指标一致
     *
     * @var eventLocation
     */
    public $eventLocation;

    /**
     * @description 事件上报时间
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
