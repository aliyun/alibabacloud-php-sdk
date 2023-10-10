<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListConvertableEcuResponseBody\instanceList;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The number of CPU cores of the ECS instance.
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The ID of the elastic compute units (ECU).
     *
     * @example b197-40ab-9155-7ca7
     *
     * @var string
     */
    public $ecuId;

    /**
     * @description The elastic IP address (EIP) associated with the ECS instance. The EIP can be changed.
     *
     * @example 13.xx.xxx.xx
     *
     * @var string
     */
    public $eip;

    /**
     * @description Indicates whether the ECS instance has expired.
     *
     * @example false
     *
     * @var bool
     */
    public $expired;

    /**
     * @description The private IP address of the ECS instance. This parameter is valid only when the ECS instance is deployed in a VPC.
     *
     * @example 192.168.13.xx
     *
     * @var string
     */
    public $innerIp;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-2ze7s2v0b***********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the ECS instance.
     *
     * @example worker-k8s
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The size of memory for the ECS instance.
     *
     * @example 4096
     *
     * @var int
     */
    public $mem;

    /**
     * @description The private IP address of the ECS instance. This parameter is valid only when the ECS instance is deployed in a VPC.
     *
     * @example 192.XX.XX.123
     *
     * @var string
     */
    public $privateIp;

    /**
     * @description The public IP address of the ECS instance. This IP address can be used only by the ECS instance.
     *
     * @example 13.xx.xx.xxx
     *
     * @var string
     */
    public $publicIp;

    /**
     * @description The ID of the region where the ECS instance is located.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The state of the instance. Valid values:
     *
     *   Pending: The instance is being created.
     *   Running: The instance is running.
     *   Starting: The instance is being started.
     *   Stopping: The instance is being stopped.
     *   Stopped: The instance is stopped.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-2zef6ob8m************
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example jianwei-test
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cpu'          => 'Cpu',
        'ecuId'        => 'EcuId',
        'eip'          => 'Eip',
        'expired'      => 'Expired',
        'innerIp'      => 'InnerIp',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'mem'          => 'Mem',
        'privateIp'    => 'PrivateIp',
        'publicIp'     => 'PublicIp',
        'regionId'     => 'RegionId',
        'status'       => 'Status',
        'vpcId'        => 'VpcId',
        'vpcName'      => 'VpcName',
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
        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
        }
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
