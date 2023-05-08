<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVMsInServiceMeshResponseBody;

use AlibabaCloud\Tea\Model;

class VMs extends Model
{
    /**
     * @description Indicates whether the VM has labels.
     *
     * @example true
     *
     * @var bool
     */
    public $hasTag;

    /**
     * @description The host name of the VM.
     *
     * @example iZ2ze45cgxkx4q12eh9l****
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the VM.
     *
     * @example i-2ze45cgxkx4q12e****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the VM.
     *
     * @example 10.0.*,***
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The security group to which the VM belongs.
     *
     * @example sg-2zeaqy08amco9osl****
     *
     * @var string
     */
    public $securityGroupIds;

    /**
     * @description The status of the VM.
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'hasTag'           => 'HasTag',
        'hostName'         => 'HostName',
        'instanceId'       => 'InstanceId',
        'ipAddress'        => 'IpAddress',
        'region'           => 'Region',
        'securityGroupIds' => 'SecurityGroupIds',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasTag) {
            $res['HasTag'] = $this->hasTag;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VMs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasTag'])) {
            $model->hasTag = $map['HasTag'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = $map['SecurityGroupIds'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
