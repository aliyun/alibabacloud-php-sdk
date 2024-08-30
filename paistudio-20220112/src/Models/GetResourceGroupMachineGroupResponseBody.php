<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetResourceGroupMachineGroupResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetResourceGroupMachineGroupResponseBody extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $cpu;

    /**
     * @example 535
     *
     * @var string
     */
    public $defaultDriver;

    /**
     * @example 1
     *
     * @var int
     */
    public $ecsCount;

    /**
     * @example ecs.c6.large
     *
     * @var string
     */
    public $ecsSpec;

    /**
     * @example 2023-06-22T00:00:00Z
     *
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @example 2023-06-22T00:00:00Z
     *
     * @var string
     */
    public $gmtExpiredTime;

    /**
     * @example 2023-06-22T00:00:00Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 2023-06-22T00:00:00Z
     *
     * @var string
     */
    public $gmtStartedTime;

    /**
     * @example 8
     *
     * @var string
     */
    public $gpu;

    /**
     * @example A100
     *
     * @var string
     */
    public $gpuType;

    /**
     * @example mgmioirqjgw6c5lg
     *
     * @var string
     */
    public $machineGroupID;

    /**
     * @example 64
     *
     * @var string
     */
    public $memory;

    /**
     * @example testMachineGroup
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var string
     */
    public $paymentDuration;

    /**
     * @example Month
     *
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @example PREPAY
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example 18D5A1C6-14B8-545E-8408-0A7DDB4C6B5E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rgf0zhfqn1d4ity2
     *
     * @var string
     */
    public $resourceGroupID;

    /**
     * @example Ready
     *
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $supportedDrivers;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'cpu'                 => 'Cpu',
        'defaultDriver'       => 'DefaultDriver',
        'ecsCount'            => 'EcsCount',
        'ecsSpec'             => 'EcsSpec',
        'gmtCreatedTime'      => 'GmtCreatedTime',
        'gmtExpiredTime'      => 'GmtExpiredTime',
        'gmtModifiedTime'     => 'GmtModifiedTime',
        'gmtStartedTime'      => 'GmtStartedTime',
        'gpu'                 => 'Gpu',
        'gpuType'             => 'GpuType',
        'machineGroupID'      => 'MachineGroupID',
        'memory'              => 'Memory',
        'name'                => 'Name',
        'paymentDuration'     => 'PaymentDuration',
        'paymentDurationUnit' => 'PaymentDurationUnit',
        'paymentType'         => 'PaymentType',
        'requestId'           => 'RequestId',
        'resourceGroupID'     => 'ResourceGroupID',
        'status'              => 'Status',
        'supportedDrivers'    => 'SupportedDrivers',
        'tags'                => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->defaultDriver) {
            $res['DefaultDriver'] = $this->defaultDriver;
        }
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }
        if (null !== $this->gmtCreatedTime) {
            $res['GmtCreatedTime'] = $this->gmtCreatedTime;
        }
        if (null !== $this->gmtExpiredTime) {
            $res['GmtExpiredTime'] = $this->gmtExpiredTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->gmtStartedTime) {
            $res['GmtStartedTime'] = $this->gmtStartedTime;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->gpuType) {
            $res['GpuType'] = $this->gpuType;
        }
        if (null !== $this->machineGroupID) {
            $res['MachineGroupID'] = $this->machineGroupID;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportedDrivers) {
            $res['SupportedDrivers'] = $this->supportedDrivers;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceGroupMachineGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['DefaultDriver'])) {
            $model->defaultDriver = $map['DefaultDriver'];
        }
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }
        if (isset($map['GmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['GmtCreatedTime'];
        }
        if (isset($map['GmtExpiredTime'])) {
            $model->gmtExpiredTime = $map['GmtExpiredTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['GmtStartedTime'])) {
            $model->gmtStartedTime = $map['GmtStartedTime'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['GpuType'])) {
            $model->gpuType = $map['GpuType'];
        }
        if (isset($map['MachineGroupID'])) {
            $model->machineGroupID = $map['MachineGroupID'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportedDrivers'])) {
            if (!empty($map['SupportedDrivers'])) {
                $model->supportedDrivers = $map['SupportedDrivers'];
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
