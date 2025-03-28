<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class CreateDedicatedClusterMonitorRuleRequest extends Model
{
    /**
     * @var int
     */
    public $cpuAlarmThreshold;

    /**
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @var int
     */
    public $diskAlarmThreshold;

    /**
     * @var int
     */
    public $duAlarmThreshold;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $memAlarmThreshold;

    /**
     * @var int
     */
    public $noticeSwitch;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $phones;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'cpuAlarmThreshold' => 'CpuAlarmThreshold',
        'dedicatedClusterId' => 'DedicatedClusterId',
        'diskAlarmThreshold' => 'DiskAlarmThreshold',
        'duAlarmThreshold' => 'DuAlarmThreshold',
        'instanceId' => 'InstanceId',
        'memAlarmThreshold' => 'MemAlarmThreshold',
        'noticeSwitch' => 'NoticeSwitch',
        'ownerId' => 'OwnerId',
        'phones' => 'Phones',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuAlarmThreshold) {
            $res['CpuAlarmThreshold'] = $this->cpuAlarmThreshold;
        }

        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }

        if (null !== $this->diskAlarmThreshold) {
            $res['DiskAlarmThreshold'] = $this->diskAlarmThreshold;
        }

        if (null !== $this->duAlarmThreshold) {
            $res['DuAlarmThreshold'] = $this->duAlarmThreshold;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->memAlarmThreshold) {
            $res['MemAlarmThreshold'] = $this->memAlarmThreshold;
        }

        if (null !== $this->noticeSwitch) {
            $res['NoticeSwitch'] = $this->noticeSwitch;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->phones) {
            $res['Phones'] = $this->phones;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['CpuAlarmThreshold'])) {
            $model->cpuAlarmThreshold = $map['CpuAlarmThreshold'];
        }

        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }

        if (isset($map['DiskAlarmThreshold'])) {
            $model->diskAlarmThreshold = $map['DiskAlarmThreshold'];
        }

        if (isset($map['DuAlarmThreshold'])) {
            $model->duAlarmThreshold = $map['DuAlarmThreshold'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MemAlarmThreshold'])) {
            $model->memAlarmThreshold = $map['MemAlarmThreshold'];
        }

        if (isset($map['NoticeSwitch'])) {
            $model->noticeSwitch = $map['NoticeSwitch'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Phones'])) {
            $model->phones = $map['Phones'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
