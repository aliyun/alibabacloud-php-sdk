<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeEventsRequest extends Model
{
    /**
     * @example 2023-06-01T04:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example DiskIOHang
     *
     * @var string
     */
    public $eventName;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example d-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example disk
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 2023-06-01T03:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example WillExecute
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'      => 'EndTime',
        'eventName'    => 'EventName',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'regionId'     => 'RegionId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
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
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
     * @return DescribeEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
