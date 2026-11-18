<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class DescribeEventsRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceGroupName;

    /**
     * @var string
     */
    public $appInstanceId;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $memberEniIp;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'appInstanceId' => 'AppInstanceId',
        'bizRegionId' => 'BizRegionId',
        'endTime' => 'EndTime',
        'endUserIds' => 'EndUserIds',
        'eventId' => 'EventId',
        'eventType' => 'EventType',
        'maxResults' => 'MaxResults',
        'memberEniIp' => 'MemberEniIp',
        'nextToken' => 'NextToken',
        'officeSiteId' => 'OfficeSiteId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'productType' => 'ProductType',
        'startTime' => 'StartTime',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }

        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1 = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->memberEniIp) {
            $res['MemberEniIp'] = $this->memberEniIp;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
        }

        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1 = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['MemberEniIp'])) {
            $model->memberEniIp = $map['MemberEniIp'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
