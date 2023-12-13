<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeVirtualNodesResponseBody;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeVirtualNodesResponseBody\virtualNodes\events;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeVirtualNodesResponseBody\virtualNodes\tags;
use AlibabaCloud\Tea\Model;

class virtualNodes extends Model
{
    /**
     * @description The time when the virtual node was created. The time follows the RFC 3339 standard and is displayed in UTC.
     *
     * @example 2021-09-08T15:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The events about the virtual node.
     *
     * @var events[]
     */
    public $events;

    /**
     * @description The public IP address of the virtual node.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the virtual node.
     *
     * @example 10.19.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The ID of the region in which the virtual node resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the virtual node belongs.
     *
     * @example rg-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the virtual node. Valid values:
     *
     *   Pending
     *   Ready
     *   Failed
     *
     * @example Ready
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags that are bound to the virtual node.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the virtual node.
     *
     * @example vnd-2ze960zkdqrldeaw****
     *
     * @var string
     */
    public $virtualNodeId;

    /**
     * @description The name of the virtual node.
     *
     * @example testNode
     *
     * @var string
     */
    public $virtualNodeName;

    /**
     * @description The ID of the security group to which the virtual node belongs.
     *
     * @example sg-2zeeyaaxlkq9sppl****
     *
     * @var string
     */
    public $virtualNodeSecurityGroupId;

    /**
     * @description The ID of the vSwitch with which the virtual node is associated.
     *
     * @example vsw-2ze23nqzig8inprou****
     *
     * @var string
     */
    public $virtualNodeVSwitchId;

    /**
     * @description The ID of the VPC to which the virtual node belongs.
     *
     * @example vpc-1vzjjflab6wvjox****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'creationTime'               => 'CreationTime',
        'events'                     => 'Events',
        'internetIp'                 => 'InternetIp',
        'intranetIp'                 => 'IntranetIp',
        'regionId'                   => 'RegionId',
        'resourceGroupId'            => 'ResourceGroupId',
        'status'                     => 'Status',
        'tags'                       => 'Tags',
        'virtualNodeId'              => 'VirtualNodeId',
        'virtualNodeName'            => 'VirtualNodeName',
        'virtualNodeSecurityGroupId' => 'VirtualNodeSecurityGroupId',
        'virtualNodeVSwitchId'       => 'VirtualNodeVSwitchId',
        'vpcId'                      => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->events) {
            $res['Events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['Events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->virtualNodeId) {
            $res['VirtualNodeId'] = $this->virtualNodeId;
        }
        if (null !== $this->virtualNodeName) {
            $res['VirtualNodeName'] = $this->virtualNodeName;
        }
        if (null !== $this->virtualNodeSecurityGroupId) {
            $res['VirtualNodeSecurityGroupId'] = $this->virtualNodeSecurityGroupId;
        }
        if (null !== $this->virtualNodeVSwitchId) {
            $res['VirtualNodeVSwitchId'] = $this->virtualNodeVSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['Events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VirtualNodeId'])) {
            $model->virtualNodeId = $map['VirtualNodeId'];
        }
        if (isset($map['VirtualNodeName'])) {
            $model->virtualNodeName = $map['VirtualNodeName'];
        }
        if (isset($map['VirtualNodeSecurityGroupId'])) {
            $model->virtualNodeSecurityGroupId = $map['VirtualNodeSecurityGroupId'];
        }
        if (isset($map['VirtualNodeVSwitchId'])) {
            $model->virtualNodeVSwitchId = $map['VirtualNodeVSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
