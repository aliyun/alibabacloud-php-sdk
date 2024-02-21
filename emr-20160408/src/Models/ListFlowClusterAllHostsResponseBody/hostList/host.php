<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterAllHostsResponseBody\hostList;

use AlibabaCloud\Tea\Model;

class host extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $cpu;

    /**
     * @example 119555
     *
     * @var string
     */
    public $hostId;

    /**
     * @example i-bp1agi4417dx08sig82j
     *
     * @var string
     */
    public $hostInstanceId;

    /**
     * @example emr-header-1.cluster-500159692
     *
     * @var string
     */
    public $hostName;

    /**
     * @example ecs.n4.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 8
     *
     * @var int
     */
    public $memory;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $privateIp;

    /**
     * @example 192.0.0.1
     *
     * @var string
     */
    public $publicIp;

    /**
     * @example CORE
     *
     * @var string
     */
    public $role;

    /**
     * @example 6dc097b0-5e92-4e08-a49e-37c26c78cf9f
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @example STARTING
     *
     * @var string
     */
    public $status;

    /**
     * @example VM
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cpu'            => 'Cpu',
        'hostId'         => 'HostId',
        'hostInstanceId' => 'HostInstanceId',
        'hostName'       => 'HostName',
        'instanceType'   => 'InstanceType',
        'memory'         => 'Memory',
        'privateIp'      => 'PrivateIp',
        'publicIp'       => 'PublicIp',
        'role'           => 'Role',
        'serialNumber'   => 'SerialNumber',
        'status'         => 'Status',
        'type'           => 'Type',
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
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->hostInstanceId) {
            $res['HostInstanceId'] = $this->hostInstanceId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return host
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['HostInstanceId'])) {
            $model->hostInstanceId = $map['HostInstanceId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
