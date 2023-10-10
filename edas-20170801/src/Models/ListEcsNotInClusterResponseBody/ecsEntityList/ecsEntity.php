<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListEcsNotInClusterResponseBody\ecsEntityList;

use AlibabaCloud\Tea\Model;

class ecsEntity extends Model
{
    /**
     * @description The number of CPU cores.
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The elastic IP address (EIP) associated with the ECS instance.
     *
     * @example 139.30.xxx.xx
     *
     * @var string
     */
    public $eip;

    /**
     * @description Indicates whether the ECS instance has expired. Valid values:
     *
     *   **true**: The ECS instance has expired.
     *   **false**: The ECS instance has not expired.
     *
     * @example false
     *
     * @var bool
     */
    public $expired;

    /**
     * @description The private IP address of the ECS instance.
     *
     * @example 192.168.20.113
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
     * @example worker-k8s-for-cs-c9dfa009a5e7c4faab2010b87cae4****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The size of memory. Unit: bytes.
     *
     * @example 4096
     *
     * @var int
     */
    public $mem;

    /**
     * @description The private IP address of the ECS instance.
     *
     * @example 192.168.*.**
     *
     * @var string
     */
    public $privateIp;

    /**
     * @description The public IP address of the ECS instance.
     *
     * @example 131.30.xxx.xx
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
     * @description The status of the ECS instance. Valid values:
     *
     *   **Pending**: The ECS instance is being created.
     *   **Running**: The ECS instance is running.
     *   **Starting**: The ECS instance is being started.
     *   **Stopping**: The ECS instance is being stopped.
     *   **Stopped**: The ECS instance is stopped.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-2zef6ob8mrlzv8x3q****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example test
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cpu'          => 'Cpu',
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
     * @return ecsEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
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
