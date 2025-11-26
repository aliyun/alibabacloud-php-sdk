<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeNetworkInterfacesRequest extends Model
{
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
    public $instanceId;

    /**
     * @var string[]
     */
    public $ipv6Address;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string[]
     */
    public $networkInterfaceIds;

    /**
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'ensRegionIds' => 'EnsRegionIds',
        'instanceId' => 'InstanceId',
        'ipv6Address' => 'Ipv6Address',
        'networkId' => 'NetworkId',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'networkInterfaceIds' => 'NetworkInterfaceIds',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'primaryIpAddress' => 'PrimaryIpAddress',
        'securityGroupId' => 'SecurityGroupId',
        'status' => 'Status',
        'type' => 'Type',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->ensRegionIds)) {
            Model::validateArray($this->ensRegionIds);
        }
        if (\is_array($this->ipv6Address)) {
            Model::validateArray($this->ipv6Address);
        }
        if (\is_array($this->networkInterfaceIds)) {
            Model::validateArray($this->networkInterfaceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ipv6Address) {
            if (\is_array($this->ipv6Address)) {
                $res['Ipv6Address'] = [];
                $n1 = 0;
                foreach ($this->ipv6Address as $item1) {
                    $res['Ipv6Address'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->networkInterfaceIds) {
            if (\is_array($this->networkInterfaceIds)) {
                $res['NetworkInterfaceIds'] = [];
                $n1 = 0;
                foreach ($this->networkInterfaceIds as $item1) {
                    $res['NetworkInterfaceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = [];
                $n1 = 0;
                foreach ($map['Ipv6Address'] as $item1) {
                    $model->ipv6Address[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['NetworkInterfaceIds'])) {
            if (!empty($map['NetworkInterfaceIds'])) {
                $model->networkInterfaceIds = [];
                $n1 = 0;
                foreach ($map['NetworkInterfaceIds'] as $item1) {
                    $model->networkInterfaceIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
