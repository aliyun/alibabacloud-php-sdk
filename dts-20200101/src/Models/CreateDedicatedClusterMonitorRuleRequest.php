<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedClusterMonitorRuleRequest extends Model
{
    /**
     * @description The alert threshold for CPU utilization. Unit: percentage.
     *
     * @example 30
     *
     * @var int
     */
    public $cpuAlarmThreshold;

    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example dts-dasd22******
     *
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description The alert threshold for disk usage. Unit: percentage.
     *
     * @example 100
     *
     * @var int
     */
    public $diskAlarmThreshold;

    /**
     * @description The alert threshold for DTS Unit (DU) usage. Unit: percentage.
     *
     * @example 20
     *
     * @var int
     */
    public $duAlarmThreshold;

    /**
     * @description The ID of the instance.
     *
     * @example rm-bp1162kryivb8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The alert threshold for memory usage. Unit: percentage.
     *
     * @example 40
     *
     * @var int
     */
    public $memAlarmThreshold;

    /**
     * @description Specifies whether to enable the alert feature. Valid values:
     *
     *   **1**: enables the alert feature.
     *   **0**: disables the alert feature.
     *
     * @example 1
     *
     * @var int
     */
    public $noticeSwitch;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The mobile phone number to which alerts are sent. Separate multiple mobile phone numbers with commas (,).
     *
     * This parameter is required.
     * @example 186****7654
     *
     * @var string
     */
    public $phones;

    /**
     * @description The ID of the region in which the Data Transmission Service (DTS) instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'cpuAlarmThreshold'  => 'CpuAlarmThreshold',
        'dedicatedClusterId' => 'DedicatedClusterId',
        'diskAlarmThreshold' => 'DiskAlarmThreshold',
        'duAlarmThreshold'   => 'DuAlarmThreshold',
        'instanceId'         => 'InstanceId',
        'memAlarmThreshold'  => 'MemAlarmThreshold',
        'noticeSwitch'       => 'NoticeSwitch',
        'ownerId'            => 'OwnerId',
        'phones'             => 'Phones',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateDedicatedClusterMonitorRuleRequest
     */
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
