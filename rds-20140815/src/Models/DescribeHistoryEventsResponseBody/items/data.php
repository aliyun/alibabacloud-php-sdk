<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHistoryEventsResponseBody\items;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description product.
     *
     * @example web
     *
     * @var string
     */
    public $cmsProduct;

    /**
     * @description The type of the database engine.
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description Detail impact.
     *
     * @example 1
     *
     * @var string
     */
    public $detailImpact;

    /**
     * @description Detail reason.
     *
     * @example xxxx
     *
     * @var string
     */
    public $detailReason;

    /**
     * @description The end date of the query.
     *
     * @example 2023-03-06T11:46:01Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Event category.
     *
     * @example Exception
     *
     * @var string
     */
    public $eventCategory;

    /**
     * @description The code of the extension point event.
     *
     * @example ENT000014
     *
     * @var string
     */
    public $eventCode;

    /**
     * @description The output names of the current file.
     *
     * This parameter is equivalent to the Output Name parameter under Output in the Dependencies section of the Properties panel in the [DataWorks console](https://workbench.data.aliyun.com/console).
     * @example xxxxx
     *
     * @var string
     */
    public $eventDetail;

    /**
     * @description The ID of the custom event.
     *
     * @example 669036
     *
     * @var string
     */
    public $eventId;

    /**
     * @description Event impact.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $eventImpact;

    /**
     * @description Event level.
     *
     * @example high
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description The cause of the event.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $eventReason;

    /**
     * @description The status of the exception. Valid values:
     *
     *   **1**: pending handling
     *   **2**: ignored
     *   **4**: confirmed
     *   **8**: marked as a false positive
     *   **16**: handling
     *   **32**: handled
     *   **64**: expired
     *
     * @example 1
     *
     * @var string
     */
    public $eventStatus;

    /**
     * @description The alert type.
     *
     *   Set the value to **sensitiveFile**.
     *
     * @example StatusNotification
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The time when the instance is created. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2023-03-17T16:05:40Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the export task was modified.
     *
     * @example 2022-12-14T09:44:39.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Processing status.
     *
     * @example done
     *
     * @var string
     */
    public $handleStatus;

    /**
     * @description Is there a lifecycle.
     *
     * @example false
     *
     * @var int
     */
    public $hasLifeCycle;

    /**
     * @description The instance ID. Separate multiple instance IDs with commas (,). You can specify up to 30 instance IDs. This parameter is empty by default, which indicates that you can specify an unlimited number of instance IDs.
     *
     * @example rg-acfmy****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example dhimgsearch
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Whether to close.
     *
     * @example 0
     *
     * @var int
     */
    public $isClosed;

    /**
     * @description The name of the cloud service in which the system event occurred.
     *
     * You can call the DescribeSystemEventMetaList operation to obtain the value of the response parameter `Product`. The value of the Product parameter indicates the names of all cloud services in which the system events of your Alibaba Cloud account occurred. For more information, see [DescribeSystemEventMetaList](~~114972~~).
     * @example rds
     *
     * @var string
     */
    public $product;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * @example cn-guangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of resource. Set the value to INSTANCE.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The type of the source resource.
     *
     * @example MSE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * @example 2022-11-29T07:23Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The account ID. You can view the ID of the **logon account** by moving the pointer over the profile in the Alibaba Cloud console.
     *
     * @example 16986832xxxxx
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'cmsProduct'    => 'CmsProduct',
        'dbType'        => 'DbType',
        'detailImpact'  => 'DetailImpact',
        'detailReason'  => 'DetailReason',
        'endTime'       => 'EndTime',
        'eventCategory' => 'EventCategory',
        'eventCode'     => 'EventCode',
        'eventDetail'   => 'EventDetail',
        'eventId'       => 'EventId',
        'eventImpact'   => 'EventImpact',
        'eventLevel'    => 'EventLevel',
        'eventReason'   => 'EventReason',
        'eventStatus'   => 'EventStatus',
        'eventType'     => 'EventType',
        'gmtCreated'    => 'GmtCreated',
        'gmtModified'   => 'GmtModified',
        'handleStatus'  => 'HandleStatus',
        'hasLifeCycle'  => 'HasLifeCycle',
        'instanceId'    => 'InstanceId',
        'instanceName'  => 'InstanceName',
        'isClosed'      => 'IsClosed',
        'product'       => 'Product',
        'regionId'      => 'RegionId',
        'resourceType'  => 'ResourceType',
        'sourceType'    => 'SourceType',
        'startTime'     => 'StartTime',
        'uid'           => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmsProduct) {
            $res['CmsProduct'] = $this->cmsProduct;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->detailImpact) {
            $res['DetailImpact'] = $this->detailImpact;
        }
        if (null !== $this->detailReason) {
            $res['DetailReason'] = $this->detailReason;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventCategory) {
            $res['EventCategory'] = $this->eventCategory;
        }
        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }
        if (null !== $this->eventDetail) {
            $res['EventDetail'] = $this->eventDetail;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventImpact) {
            $res['EventImpact'] = $this->eventImpact;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventReason) {
            $res['EventReason'] = $this->eventReason;
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->handleStatus) {
            $res['HandleStatus'] = $this->handleStatus;
        }
        if (null !== $this->hasLifeCycle) {
            $res['HasLifeCycle'] = $this->hasLifeCycle;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isClosed) {
            $res['IsClosed'] = $this->isClosed;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CmsProduct'])) {
            $model->cmsProduct = $map['CmsProduct'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DetailImpact'])) {
            $model->detailImpact = $map['DetailImpact'];
        }
        if (isset($map['DetailReason'])) {
            $model->detailReason = $map['DetailReason'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventCategory'])) {
            $model->eventCategory = $map['EventCategory'];
        }
        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }
        if (isset($map['EventDetail'])) {
            $model->eventDetail = $map['EventDetail'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventImpact'])) {
            $model->eventImpact = $map['EventImpact'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['EventReason'])) {
            $model->eventReason = $map['EventReason'];
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HandleStatus'])) {
            $model->handleStatus = $map['HandleStatus'];
        }
        if (isset($map['HasLifeCycle'])) {
            $model->hasLifeCycle = $map['HasLifeCycle'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsClosed'])) {
            $model->isClosed = $map['IsClosed'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
