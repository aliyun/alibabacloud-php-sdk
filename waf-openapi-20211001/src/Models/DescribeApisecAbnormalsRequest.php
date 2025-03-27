<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeApisecAbnormalsRequest extends Model
{
    /**
     * @var string
     */
    public $abnormalId;

    /**
     * @var string
     */
    public $abnormalLevel;

    /**
     * @var string
     */
    public $abnormalTag;

    /**
     * @var string
     */
    public $apiFormat;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiTag;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $matchedHost;

    /**
     * @var string
     */
    public $orderKey;

    /**
     * @var string
     */
    public $orderWay;

    /**
     * @var string
     */
    public $origin;

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
    public $regionId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'abnormalId' => 'AbnormalId',
        'abnormalLevel' => 'AbnormalLevel',
        'abnormalTag' => 'AbnormalTag',
        'apiFormat' => 'ApiFormat',
        'apiId' => 'ApiId',
        'apiTag' => 'ApiTag',
        'clusterId' => 'ClusterId',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'matchedHost' => 'MatchedHost',
        'orderKey' => 'OrderKey',
        'orderWay' => 'OrderWay',
        'origin' => 'Origin',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'startTime' => 'StartTime',
        'userStatus' => 'UserStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalId) {
            $res['AbnormalId'] = $this->abnormalId;
        }

        if (null !== $this->abnormalLevel) {
            $res['AbnormalLevel'] = $this->abnormalLevel;
        }

        if (null !== $this->abnormalTag) {
            $res['AbnormalTag'] = $this->abnormalTag;
        }

        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }

        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apiTag) {
            $res['ApiTag'] = $this->apiTag;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->matchedHost) {
            $res['MatchedHost'] = $this->matchedHost;
        }

        if (null !== $this->orderKey) {
            $res['OrderKey'] = $this->orderKey;
        }

        if (null !== $this->orderWay) {
            $res['OrderWay'] = $this->orderWay;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
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
        if (isset($map['AbnormalId'])) {
            $model->abnormalId = $map['AbnormalId'];
        }

        if (isset($map['AbnormalLevel'])) {
            $model->abnormalLevel = $map['AbnormalLevel'];
        }

        if (isset($map['AbnormalTag'])) {
            $model->abnormalTag = $map['AbnormalTag'];
        }

        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }

        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ApiTag'])) {
            $model->apiTag = $map['ApiTag'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MatchedHost'])) {
            $model->matchedHost = $map['MatchedHost'];
        }

        if (isset($map['OrderKey'])) {
            $model->orderKey = $map['OrderKey'];
        }

        if (isset($map['OrderWay'])) {
            $model->orderWay = $map['OrderWay'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
