<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoadBalancersRequest extends Model
{
    /**
     * @description The IP address that the ELB instance uses to provide services.
     *
     * @example 10.0.0.8
     *
     * @var string
     */
    public $address;

    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * @example cn-guangzhou-10
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the ELB instance.
     *
     * @example lb-5q73cv04zeyh43lh74lp4****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the ELB instance.
     *
     * @example example
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The status of the ELB instance. Valid values:
     *
     *   **Active** (default): The listener for the instance can forward the received traffic based on the rule.
     *   **InActive**: The listener for the instance does not forward the received traffic.
     *
     * @example InActive
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @description The ID of the network.
     *
     * @example n-5s9ayrxsd9hszrlt5fgv2****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Valid values: **10** to **100**.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the backend server.
     *
     * @example i-5f67ffjc004wwz0t****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-5sy773iy25rulsmgskmba****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'address'            => 'Address',
        'ensRegionId'        => 'EnsRegionId',
        'loadBalancerId'     => 'LoadBalancerId',
        'loadBalancerName'   => 'LoadBalancerName',
        'loadBalancerStatus' => 'LoadBalancerStatus',
        'networkId'          => 'NetworkId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'serverId'           => 'ServerId',
        'vSwitchId'          => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
