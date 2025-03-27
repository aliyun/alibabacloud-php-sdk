<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeSensitiveOutboundStatisticRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $detectionResult;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderKey;

    /**
     * @var string
     */
    public $orderWay;

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
    public $sensitiveCode;

    /**
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @var string
     */
    public $sensitiveType;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'detectionResult' => 'DetectionResult',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'orderKey' => 'OrderKey',
        'orderWay' => 'OrderWay',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'sensitiveCode' => 'SensitiveCode',
        'sensitiveLevel' => 'SensitiveLevel',
        'sensitiveType' => 'SensitiveType',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->detectionResult) {
            $res['DetectionResult'] = $this->detectionResult;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->orderKey) {
            $res['OrderKey'] = $this->orderKey;
        }

        if (null !== $this->orderWay) {
            $res['OrderWay'] = $this->orderWay;
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

        if (null !== $this->sensitiveCode) {
            $res['SensitiveCode'] = $this->sensitiveCode;
        }

        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
        }

        if (null !== $this->sensitiveType) {
            $res['SensitiveType'] = $this->sensitiveType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DetectionResult'])) {
            $model->detectionResult = $map['DetectionResult'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrderKey'])) {
            $model->orderKey = $map['OrderKey'];
        }

        if (isset($map['OrderWay'])) {
            $model->orderWay = $map['OrderWay'];
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

        if (isset($map['SensitiveCode'])) {
            $model->sensitiveCode = $map['SensitiveCode'];
        }

        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }

        if (isset($map['SensitiveType'])) {
            $model->sensitiveType = $map['SensitiveType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
