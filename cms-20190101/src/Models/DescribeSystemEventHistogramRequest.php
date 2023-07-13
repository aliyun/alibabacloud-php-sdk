<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSystemEventHistogramRequest extends Model
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
     * @description The type of the system event.
     *
     * >  You can call the [DescribeSystemEventMetaList](~~114972~~) operation to view the types of system events.
     * @example Exception
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The ID of the application group.
     *
     * @example 12345
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The level of the system event. Valid values:
     *
     *   CRITICAL
     *   WARN
     *   INFO
     *
     * @example CRITICAL
     *
     * @var string
     */
    public $level;

    /**
     * @description The name of the system event.
     *
     * >  You can call the [DescribeSystemEventMetaList](~~114972~~) operation to view the names of system events.
     * @example BucketIngressBandwidth
     *
     * @var string
     */
    public $name;

    /**
     * @description The abbreviation of the service name.
     *
     * >  You can call the [DescribeSystemEventMetaList](~~114972~~) operation to view the abbreviations of service names.
     * @example OSS
     *
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The keywords contained in the content of the system event to query. You can use a logical operator between keywords. Examples:
     *
     *   If you need to query the system event whose content contains a and b, set the value to `a and b`.
     *   If you need to query the system event whose content contains a or b, set the value to `a or b`.
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

    /**
     * @description The status of the system event.
     *
     * >  You can call the [DescribeSystemEventMetaList](~~114972~~) operation to view the statuses of system events.
     * @example normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'        => 'EndTime',
        'eventType'      => 'EventType',
        'groupId'        => 'GroupId',
        'level'          => 'Level',
        'name'           => 'Name',
        'product'        => 'Product',
        'regionId'       => 'RegionId',
        'searchKeywords' => 'SearchKeywords',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
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
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSystemEventHistogramRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
