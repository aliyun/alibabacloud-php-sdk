<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHistoryEventsResponseBody\items;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The cloud service type of the application group. Valid values: **web** and native. The value web indicates a web application. The value **native** indicates a local application.
     *
     * @example web
     *
     * @var string
     */
    public $cmsProduct;

    /**
     * @description The database engine.
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The pagination parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $detailImpact;

    /**
     * @description The details of the instance operation.
     *
     * @example xxxx
     *
     * @var string
     */
    public $detailReason;

    /**
     * @description The time when the alert was closed. The time follows the ISO 8601 standard in the *yyyy-mm-dd*t*hh:mm*z format. The time is displayed in UTC.
     *
     * @example 2023-03-06T11:46:01Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The system event category. For more information, see [View the event history of an ApsaraDB RDS instance](https://help.aliyun.com/document_detail/129759.html).
     *
     * @example Exception
     *
     * @var string
     */
    public $eventCategory;

    /**
     * @description The event code.
     *
     * @example ENT000014
     *
     * @var string
     */
    public $eventCode;

    /**
     * @description The event details.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $eventDetail;

    /**
     * @description The event ID.
     *
     * @example 669036
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The event impact.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $eventImpact;

    /**
     * @description The event level. For more information, see [View the event history of an ApsaraDB RDS instance](https://help.aliyun.com/document_detail/129759.html).
     *
     * @example high
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description The event source.
     *
     * @example xxxxx
     *
     * @var string
     */
    public $eventReason;

    /**
     * @description The status of the alert event. Valid values:
     *
     *   **1**: pending
     *   **2**: ignored
     *   **4**: confirmed
     *   **8**: marked as false positive
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
     * @description The event type. Valid values:
     *
     * @example StatusNotification
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The creation time. The time follows the ISO 8601 standard in the *yyyy-mm-dd*t*hh:mm*z format. The time is displayed in UTC.
     *
     * @example 2023-03-17T16:05:40Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The update time. The time follows the ISO 8601 standard in the *yyyy-mm-dd*t*hh:mm*z format. The time is displayed in UTC.
     *
     * @example 2022-12-14T09:44:39.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The handling status.
     *
     * @example done
     *
     * @var string
     */
    public $handleStatus;

    /**
     * @description Indicates whether the event has a lifecycle.
     *
     * @example false
     *
     * @var int
     */
    public $hasLifeCycle;

    /**
     * @description The instance ID.
     *
     * @example rg-acfmy****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example dhimgsearch
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Indicates whether the alert is closed. Valid values: **0**: closed. **1**: not closed.
     *
     * @example 0
     *
     * @var int
     */
    public $isClosed;

    /**
     * @description The service name.
     *
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
     * @description The resource type. The value is fixed as **INSTANCE**.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The type of the source data.
     *
     * @example MSE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The start time. The time follows the ISO 8601 standard in the *yyyy-mm-dd*t*hh:mm*z format. The time is displayed in UTC.
     *
     * @example 2022-11-29T07:23Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The ID of the resource owner.
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
