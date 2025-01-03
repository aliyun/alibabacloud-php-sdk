<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEventsResponseBody;

use AlibabaCloud\Tea\Model;

class resourceEvents extends Model
{
    /**
     * @description The description of the event.
     *
     * @example need snapshot
     *
     * @var string
     */
    public $description;

    /**
     * @description The end time of the event, expressed as the number of milliseconds after Jan 1, 1970 00:00:00 UTC.
     *
     * @example 1679538083000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The level of the event. Valid values:
     *
     * 3.  CRITICAL
     * @example INFO
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description The name of the event. Valid values:
     *
     *   NoSnapshot: indicates the event that is triggered because no snapshot is created for a disk to protect data on the disk.
     *   BurstIOTriggered: indicates the event that is triggered when a burst I/O operation is performed on a disk.
     *   CostOptimizationNeeded: indicates the event that is triggered when cost optimization is required.
     *   DiskSpecNotMatchedWithInstance: indicates the event that is triggered because the specifications of a disk do not match the instance to which the disk is attached.
     *   DiskIONo4kAligned: indicates the event that is triggered because the physical and logical sectors involved in a read or write operation are not 4K aligned.
     *   DiskIOHang: indicates the event that is triggered when an I/O hang occurs on a disk.
     *   InstanceIOPSExceedInstanceMaxLimit: indicates the event that is triggered when the number of IOPS on an instance reaches the upper limit.
     *   InstanceBPSExceedInstanceMaxLimit: indicates the event that is triggered when the number of BPS on an instance reaches the upper limit.
     *   DiskIOPSExceedInstanceMaxLimit: indicates the event that is triggered when the number of IOPS on a disk reaches the upper limit for the associated instance.
     *   DiskBPSExceedInstanceMaxLimit: indicates the event that is triggered when the number of BPS on a disk reaches the upper limit for the associated instance.
     *   DiskIOPSExceedDiskMaxLimit: indicates the event that is triggered when the number of IOPS on a disk reaches the upper limit for the disk.
     *   DiskBPSExceedDiskMaxLimit: indicates the event that is triggered when the number of BPS on a disk reaches the upper limit for the disk.
     *
     * @example DiskIOHang
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The type of the event. Valid values:
     *
     * 3.  Alert
     * @example Alert
     *
     * @var string
     */
    public $eventType;

    /**
     * @description Extra attributes of event, possible fields are:
     *
     * - Adapter: cloud disk mount point.
     * @example {\\"EcsInstanceId\\":\\"i-uf6dkn9qpcw6y94g7ag7\\",\\"Adapter\\":\\"hda\\"}
     *
     * @var string
     */
    public $extraAttributes;

    /**
     * @description The recommended action after the event occurred. Valid values:
     *
     *   ModifyDiskSpec
     *   CreateSnapshot
     *   ResizeDisk
     *   AdjustProvision
     *   ModifyInstanceSpec
     *
     * @example AdjustProvision
     *
     * @var string
     */
    public $recommendAction;

    /**
     * @description The codes of the parameters for the recommended action after the event occurred.
     *
     * @example 4296
     *
     * @var string
     */
    public $recommendParams;

    /**
     * @description The ID of the resource.
     *
     * @example d-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource.
     *
     * @example disk
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The start time of the event, expressed as the number of milliseconds after Jan 1, 1970 00:00:00 UTC.
     *
     * @example 1684204822000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the event. Valid values:
     *
     * 6.  Deleted
     * @example WillExecute
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description'     => 'Description',
        'endTime'         => 'EndTime',
        'eventLevel'      => 'EventLevel',
        'eventName'       => 'EventName',
        'eventType'       => 'EventType',
        'extraAttributes' => 'ExtraAttributes',
        'recommendAction' => 'RecommendAction',
        'recommendParams' => 'RecommendParams',
        'resourceId'      => 'ResourceId',
        'resourceType'    => 'ResourceType',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->extraAttributes) {
            $res['ExtraAttributes'] = $this->extraAttributes;
        }
        if (null !== $this->recommendAction) {
            $res['RecommendAction'] = $this->recommendAction;
        }
        if (null !== $this->recommendParams) {
            $res['RecommendParams'] = $this->recommendParams;
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
     * @return resourceEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['ExtraAttributes'])) {
            $model->extraAttributes = $map['ExtraAttributes'];
        }
        if (isset($map['RecommendAction'])) {
            $model->recommendAction = $map['RecommendAction'];
        }
        if (isset($map['RecommendParams'])) {
            $model->recommendParams = $map['RecommendParams'];
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
