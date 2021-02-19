<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlarmsRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $alarmTaskId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var bool
     */
    public $isEnable;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'regionId'             => 'RegionId',
        'scalingGroupId'       => 'ScalingGroupId',
        'alarmTaskId'          => 'AlarmTaskId',
        'state'                => 'State',
        'isEnable'             => 'IsEnable',
        'metricType'           => 'MetricType',
        'metricName'           => 'MetricName',
        'pageSize'             => 'PageSize',
        'pageNumber'           => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->alarmTaskId) {
            $res['AlarmTaskId'] = $this->alarmTaskId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlarmsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['AlarmTaskId'])) {
            $model->alarmTaskId = $map['AlarmTaskId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
