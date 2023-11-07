<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedEventsResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description An array that consists of the details about the event.
     *
     * @example {
     * "eventId": "239EB588-CD24-522E-B0B5-174A1A58****",
     * "eventSource": "ecs.cn-hangzhou.aliyuncs.com",
     * "sourceIpAddress": "10.10.**.**",
     * "userIdentity": {
     * "accountId": "104758519118****",
     * "principalId": "24549429003625****",
     * }
     * @var string
     */
    public $detail;

    /**
     * @description The name of the event.
     *
     * @example DescribeInstances
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The event source.
     *
     * @example ManagementEvent
     *
     * @var string
     */
    public $source;

    /**
     * @description The timestamp when the event was generated.
     *
     * @example 1657247532000
     *
     * @var int
     */
    public $usedTimestamp;
    protected $_name = [
        'detail'        => 'Detail',
        'eventName'     => 'EventName',
        'source'        => 'Source',
        'usedTimestamp' => 'UsedTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->usedTimestamp) {
            $res['UsedTimestamp'] = $this->usedTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UsedTimestamp'])) {
            $model->usedTimestamp = $map['UsedTimestamp'];
        }

        return $model;
    }
}
