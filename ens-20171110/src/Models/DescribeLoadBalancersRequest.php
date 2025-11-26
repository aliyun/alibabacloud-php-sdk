<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeLoadBalancersRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string[]
     */
    public $ensRegionIds;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @var string
     */
    public $loadBalancerType;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'address' => 'Address',
        'ensRegionId' => 'EnsRegionId',
        'ensRegionIds' => 'EnsRegionIds',
        'loadBalancerId' => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
        'loadBalancerStatus' => 'LoadBalancerStatus',
        'loadBalancerType' => 'LoadBalancerType',
        'networkId' => 'NetworkId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'serverId' => 'ServerId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->ensRegionIds)) {
            Model::validateArray($this->ensRegionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->ensRegionIds) {
            if (\is_array($this->ensRegionIds)) {
                $res['EnsRegionIds'] = [];
                $n1 = 0;
                foreach ($this->ensRegionIds as $item1) {
                    $res['EnsRegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->loadBalancerType) {
            $res['LoadBalancerType'] = $this->loadBalancerType;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['EnsRegionIds'])) {
            if (!empty($map['EnsRegionIds'])) {
                $model->ensRegionIds = [];
                $n1 = 0;
                foreach ($map['EnsRegionIds'] as $item1) {
                    $model->ensRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['LoadBalancerType'])) {
            $model->loadBalancerType = $map['LoadBalancerType'];
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
