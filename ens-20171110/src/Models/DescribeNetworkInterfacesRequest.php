<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeNetworkInterfacesRequest extends Model
{
    /**
     * @description The region ID of the instance.
     *
     * @example cn-tianjin-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the instance.
     *
     * @example i-5t7z99n32gplriv
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the network.
     *
     * @example n-2zeuphj08tt7q3brd****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The ID of the ENI.
     *
     * @example eni-58z57orgmt6d1****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The name of the ENI.
     *
     * @example test-01
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 100. Default value: 10.
     *
     * @example 50
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The primary IP address of the ENI.
     *
     * @example ***
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description The ID of the security group to which the secondary ENI belongs. To query the details of secondary ENIs based on the ID of a security group, specify this parameter.
     *
     * @example sg-5p1fg655nh68xyz9i***
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The status of the ENI. Valid values:
     *
     *   Available: The ENI is available.
     *   Attaching: The ENI is being attached to an instance.
     *   InUse: The ENI is attached to an instance.
     *   Detaching: The ENI is being detached from an instance.
     *   Deleting: The ENI is being deleted.
     *
     * This parameter is empty by default, which indicates that ENIs in all states are queried.
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the ENI. Valid values:
     *
     *   Primary
     *   Secondary
     *
     * This parameter is empty by default, which indicates that both primary and secondary ENIs are queried.
     * @example Secondary
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-12345
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ensRegionId'          => 'EnsRegionId',
        'instanceId'           => 'InstanceId',
        'networkId'            => 'NetworkId',
        'networkInterfaceId'   => 'NetworkInterfaceId',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'primaryIpAddress'     => 'PrimaryIpAddress',
        'securityGroupId'      => 'SecurityGroupId',
        'status'               => 'Status',
        'type'                 => 'Type',
        'vSwitchId'            => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkInterfacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
