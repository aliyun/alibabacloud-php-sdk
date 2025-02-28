<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBProxyPerformanceRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $DBProxyEngineType;
    /**
     * @var string
     */
    public $DBProxyInstanceType;
    /**
     * @var string
     */
    public $dimension;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $metricsName;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'DBProxyEngineType'    => 'DBProxyEngineType',
        'DBProxyInstanceType'  => 'DBProxyInstanceType',
        'dimension'            => 'Dimension',
        'endTime'              => 'EndTime',
        'metricsName'          => 'MetricsName',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startTime'            => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }

        if (null !== $this->DBProxyInstanceType) {
            $res['DBProxyInstanceType'] = $this->DBProxyInstanceType;
        }

        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->metricsName) {
            $res['MetricsName'] = $this->metricsName;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }

        if (isset($map['DBProxyInstanceType'])) {
            $model->DBProxyInstanceType = $map['DBProxyInstanceType'];
        }

        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MetricsName'])) {
            $model->metricsName = $map['MetricsName'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
