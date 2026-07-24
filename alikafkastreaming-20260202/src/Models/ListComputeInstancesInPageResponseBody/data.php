<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\ListComputeInstancesInPageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $autoRenewFlag;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $cu;

    /**
     * @var float
     */
    public $cuLimitSum;

    /**
     * @var float
     */
    public $cuReservedSum;

    /**
     * @var float
     */
    public $cuUsedSum;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var int
     */
    public $totalJobs;

    /**
     * @var int
     */
    public $totalRunningJobs;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'autoRenewFlag' => 'AutoRenewFlag',
        'chargeType' => 'ChargeType',
        'commodityCode' => 'CommodityCode',
        'createTime' => 'CreateTime',
        'cu' => 'Cu',
        'cuLimitSum' => 'CuLimitSum',
        'cuReservedSum' => 'CuReservedSum',
        'cuUsedSum' => 'CuUsedSum',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'owner' => 'Owner',
        'regionId' => 'RegionId',
        'serviceStatus' => 'ServiceStatus',
        'totalJobs' => 'TotalJobs',
        'totalRunningJobs' => 'TotalRunningJobs',
        'vSwitchIds' => 'VSwitchIds',
        'version' => 'Version',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewFlag) {
            $res['AutoRenewFlag'] = $this->autoRenewFlag;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }

        if (null !== $this->cuLimitSum) {
            $res['CuLimitSum'] = $this->cuLimitSum;
        }

        if (null !== $this->cuReservedSum) {
            $res['CuReservedSum'] = $this->cuReservedSum;
        }

        if (null !== $this->cuUsedSum) {
            $res['CuUsedSum'] = $this->cuUsedSum;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }

        if (null !== $this->totalJobs) {
            $res['TotalJobs'] = $this->totalJobs;
        }

        if (null !== $this->totalRunningJobs) {
            $res['TotalRunningJobs'] = $this->totalRunningJobs;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AutoRenewFlag'])) {
            $model->autoRenewFlag = $map['AutoRenewFlag'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['CuLimitSum'])) {
            $model->cuLimitSum = $map['CuLimitSum'];
        }

        if (isset($map['CuReservedSum'])) {
            $model->cuReservedSum = $map['CuReservedSum'];
        }

        if (isset($map['CuUsedSum'])) {
            $model->cuUsedSum = $map['CuUsedSum'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        if (isset($map['TotalJobs'])) {
            $model->totalJobs = $map['TotalJobs'];
        }

        if (isset($map['TotalRunningJobs'])) {
            $model->totalRunningJobs = $map['TotalRunningJobs'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
