<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSystemEventCountRequest extends Model
{
    /**
     * @description The timestamp that specifies the end of the time range to query. Unit: milliseconds.
     *
     * @example 1635993921000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of the system event.
     *
     * You can call the DescribeSystemEventMetaList operation to obtain the value of the response parameter `EventType`. The value of the EventType parameter indicates the types of system events that occurred for all cloud services in your Alibaba Cloud account. For more information, see [DescribeSystemEventMetaList](~~114972~~).
     * @example StatusNotification
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The ID of the application group.
     *
     * @example 17285****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The level of the system event. Valid values:
     *
     *   Critical
     *   Warn
     *   Info
     *
     * You can call the DescribeSystemEventMetaList operation to obtain the value of the response parameter `Level`. The value of the Level parameter indicates the levels of system events that occurred for all cloud services in your Alibaba Cloud account. For more information, see [DescribeSystemEventMetaList](~~114972~~).
     * @example Info
     *
     * @var string
     */
    public $level;

    /**
     * @description The name of the system event.
     *
     * You can call the DescribeSystemEventMetaList operation to obtain the value of the response parameter `Name`. The value of the Name parameter indicates the names of system events that occurred for all cloud services in your Alibaba Cloud account. For more information, see [DescribeSystemEventMetaList](~~114972~~).
     * @example Instance:StateChange
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the cloud service in which the system event occurred.
     *
     * You can call the DescribeSystemEventMetaList operation to obtain the value of the response parameter `Product`. The value of the Product parameter indicates the names of all cloud services in which the system events of your Alibaba Cloud account occurred. For more information, see [DescribeSystemEventMetaList](~~114972~~).
     * @example ECS
     *
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The keywords that are used to search for the system event. You can use a logical operator to connect keywords. Valid values:
     *
     *   If you want to search for the system event whose content contains a and b, set the value to `a and b`.
     *   If you want to search for the system event whose content contains a or b, set the value to `a or b`.
     *
     * @example ECS
     *
     * @var string
     */
    public $searchKeywords;

    /**
     * @description The timestamp that specifies the start of the time range to query. Unit: milliseconds.
     *
     * @example 1635993541000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the system event.
     *
     * You can call the DescribeSystemEventMetaList operation to obtain the value of the response parameter `Status`. The value of the Status parameter indicates the status of system events that occurred for all cloud services in your Alibaba Cloud account. For more information, see [DescribeSystemEventMetaList](~~114972~~).
     * @example Normal
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
     * @return DescribeSystemEventCountRequest
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
