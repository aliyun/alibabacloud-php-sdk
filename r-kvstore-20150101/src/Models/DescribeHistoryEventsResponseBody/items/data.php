<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeHistoryEventsResponseBody\items;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cmsProduct;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $detailImpact;

    /**
     * @var string
     */
    public $detailReason;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventCategory;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventDetail;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventImpact;

    /**
     * @var string
     */
    public $eventLevel;

    /**
     * @var string
     */
    public $eventReason;

    /**
     * @var string
     */
    public $eventStatus;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $handleStatus;

    /**
     * @var int
     */
    public $hasLifeCycle;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $isClosed;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'cmsProduct' => 'CmsProduct',
        'dbType' => 'DbType',
        'detailImpact' => 'DetailImpact',
        'detailReason' => 'DetailReason',
        'endTime' => 'EndTime',
        'eventCategory' => 'EventCategory',
        'eventCode' => 'EventCode',
        'eventDetail' => 'EventDetail',
        'eventId' => 'EventId',
        'eventImpact' => 'EventImpact',
        'eventLevel' => 'EventLevel',
        'eventReason' => 'EventReason',
        'eventStatus' => 'EventStatus',
        'eventType' => 'EventType',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'handleStatus' => 'HandleStatus',
        'hasLifeCycle' => 'HasLifeCycle',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'isClosed' => 'IsClosed',
        'product' => 'Product',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'sourceType' => 'SourceType',
        'startTime' => 'StartTime',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
