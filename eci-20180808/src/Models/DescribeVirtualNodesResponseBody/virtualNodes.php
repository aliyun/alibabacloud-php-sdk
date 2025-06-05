<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeVirtualNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeVirtualNodesResponseBody\virtualNodes\events;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeVirtualNodesResponseBody\virtualNodes\tags;

class virtualNodes extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var events[]
     */
    public $events;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $virtualNodeId;

    /**
     * @var string
     */
    public $virtualNodeName;

    /**
     * @var string
     */
    public $virtualNodeSecurityGroupId;

    /**
     * @var string
     */
    public $virtualNodeVSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'events' => 'Events',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
        'virtualNodeId' => 'VirtualNodeId',
        'virtualNodeName' => 'VirtualNodeName',
        'virtualNodeSecurityGroupId' => 'VirtualNodeSecurityGroupId',
        'virtualNodeVSwitchId' => 'VirtualNodeVSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['Events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    $res['Events'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['Events'] as $item1) {
                    $model->events[$n1++] = events::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
