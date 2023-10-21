<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomEventCountRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1552220485596
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the custom event.
     *
     * @example 123
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The ID of the application group.
     *
     * @example 12345
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the custom event.
     *
     * @example BABEL_BUY
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The keywords that are contained in the content of the custom event to query. You can use a logical operator between keywords.
     *
     *   If you need to query the custom event whose content contains a and b, set the value to a and b.
     *   If you need to query the custom event whose content contains a or b, set the value to a or b.
     *
     * @example cms
     *
     * @var string
     */
    public $searchKeywords;

    /**
     * @description The beginning of the time range to query.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1552209685596
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'        => 'EndTime',
        'eventId'        => 'EventId',
        'groupId'        => 'GroupId',
        'name'           => 'Name',
        'regionId'       => 'RegionId',
        'searchKeywords' => 'SearchKeywords',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->searchKeywords) {
            $res['SearchKeywords'] = $this->searchKeywords;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomEventCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SearchKeywords'])) {
            $model->searchKeywords = $map['SearchKeywords'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
