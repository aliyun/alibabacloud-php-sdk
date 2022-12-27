<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoadBalancersRequest extends Model
{
    /**
     * @example 10.0.0.8
     *
     * @var string
     */
    public $address;

    /**
     * @example cn-guangzhou-10
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example lb-5q73cv04zeyh43lh74lp4****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @example example
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @example InActive
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @example n-5s9ayrxsd9hszrlt5fgv2****
     *
     * @var string
     */
    public $networkId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example i-5f67ffjc004wwz0t****
     *
     * @var string
     */
    public $serverId;

    /**
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
