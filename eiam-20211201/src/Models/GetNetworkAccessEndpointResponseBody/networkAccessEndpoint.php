<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetNetworkAccessEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class networkAccessEndpoint extends Model
{
    /**
     * @description The time when the baseline was created.
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Public egress ip address range of the dedicated network endpoint
     * This field is returned only when NetworkEndpointType is set to private.
     *
     * @example 172.168.x.x
     *
     * @var string[]
     */
    public $egressPrivateIpAddresses;

    /**
     * @description Public egress ip address range of the shared network endpoint
     * This field is returned only when networkEndpointType is set to shared.
     *
     * @example 8.xx.xx.xxx/27
     *
     * @var string[]
     */
    public $egressPublicIpAddresses;

    /**
     * @description Instance ID.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The unique identifier of the network access endpoint.
     *
     * @example nae_examplexxx
     *
     * @var string
     */
    public $networkAccessEndpointId;

    /**
     * @description Private network endpoint name.
     *
     * @example xx business VPC access endpoint
     *
     * @var string
     */
    public $networkAccessEndpointName;

    /**
     * @description Type of the Network Endpoint
     * Possible values:
     *
     * shared: Shared network endpoint
     *
     * private: Dedicated network endpoint
     *
     * @example private
     *
     * @var string
     */
    public $networkAccessEndpointType;

    /**
     * @description The ID of the destination security group.
     *
     * @example sg-examplexxx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description Status of the Network Endpoint
     * Possible values:
     *
     * pending: Pending initialization
     *
     * creating: Being created
     *
     * running: Running
     *
     * deleting: Being deleted
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the endpoint was updated.
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description List of specified vSwitches associated with the dedicated network endpoint connection.
     *
     * @example vsw-examplexxx
     *
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-examplexxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The region ID of the outbound virtual private cloud (VPC).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'egressPrivateIpAddresses' => 'EgressPrivateIpAddresses',
        'egressPublicIpAddresses' => 'EgressPublicIpAddresses',
        'instanceId' => 'InstanceId',
        'networkAccessEndpointId' => 'NetworkAccessEndpointId',
        'networkAccessEndpointName' => 'NetworkAccessEndpointName',
        'networkAccessEndpointType' => 'NetworkAccessEndpointType',
        'securityGroupId' => 'SecurityGroupId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
        'vpcRegionId' => 'VpcRegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->egressPrivateIpAddresses) {
            $res['EgressPrivateIpAddresses'] = $this->egressPrivateIpAddresses;
        }
        if (null !== $this->egressPublicIpAddresses) {
            $res['EgressPublicIpAddresses'] = $this->egressPublicIpAddresses;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkAccessEndpointId) {
            $res['NetworkAccessEndpointId'] = $this->networkAccessEndpointId;
        }
        if (null !== $this->networkAccessEndpointName) {
            $res['NetworkAccessEndpointName'] = $this->networkAccessEndpointName;
        }
        if (null !== $this->networkAccessEndpointType) {
            $res['NetworkAccessEndpointType'] = $this->networkAccessEndpointType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAccessEndpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EgressPrivateIpAddresses'])) {
            if (!empty($map['EgressPrivateIpAddresses'])) {
                $model->egressPrivateIpAddresses = $map['EgressPrivateIpAddresses'];
            }
        }
        if (isset($map['EgressPublicIpAddresses'])) {
            if (!empty($map['EgressPublicIpAddresses'])) {
                $model->egressPublicIpAddresses = $map['EgressPublicIpAddresses'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkAccessEndpointId'])) {
            $model->networkAccessEndpointId = $map['NetworkAccessEndpointId'];
        }
        if (isset($map['NetworkAccessEndpointName'])) {
            $model->networkAccessEndpointName = $map['NetworkAccessEndpointName'];
        }
        if (isset($map['NetworkAccessEndpointType'])) {
            $model->networkAccessEndpointType = $map['NetworkAccessEndpointType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }

        return $model;
    }
}
