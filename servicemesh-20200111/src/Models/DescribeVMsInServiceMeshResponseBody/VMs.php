<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVMsInServiceMeshResponseBody;

use AlibabaCloud\Tea\Model;

class VMs extends Model
{
    /**
     * @var bool
     */
    public $hasTag;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $securityGroupIds;

    /**
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
