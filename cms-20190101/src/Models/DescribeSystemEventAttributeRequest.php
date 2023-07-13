<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSystemEventAttributeRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * The value must be a UNIX timestamp. It is the number of seconds that have elapsed since 00:00:00 UTC, January 1, 1970.
     * @example 1552221584949
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of the system event.
     *
     * >  You can call the [DescribeSystemEventMetaList](~~114972~~) operation to query the types of system events.
     * @example Exception
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The ID of the application group.
     *
     * @example 12346
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The level of the system event. Valid values:
     *
     *   CRITICAL: critical
     *   WARN: warning
     *   INFO: information
     *
     * @example CRITICAL
     *
     * @var string
     */
    public $level;

    /**
     * @description The name of the system event.
     *
     * >  You can call the [DescribeSystemEventMetaList](~~114972~~) operation to query the names of system events.
     * @example BucketIngressBandwidth
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The abbreviation of the service name.
     *
     * >  You can call the [DescribeSystemEventMetaList](~~114972~~) operation to query the abbreviations of service names.
     * @example oss
     *
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The keywords that are used to search for the system event. Valid values:
     *
     *   If you want to search for the system event whose content contains a and b, set the value to `a and b`.
     *   If you want to search for the system event whose content contains a or b, set the value to `a or b`.
     *
     * @example cms
     *
     * @var string
     */
    public $searchKeywords;

    /**
     * @description The beginning of the time range to query.
     *
     * The value must be a UNIX timestamp. It is the number of seconds that have elapsed since 00:00:00 UTC, January 1, 1970.
     * @example 1552199984949
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the system event.
     *
     * >  You can call the [DescribeSystemEventMetaList](~~114972~~) operation to query the statuses of system events.
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
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeSystemEventAttributeRequest
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
