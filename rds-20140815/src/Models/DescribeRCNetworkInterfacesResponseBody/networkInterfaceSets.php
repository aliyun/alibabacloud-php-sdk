<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCNetworkInterfacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCNetworkInterfacesResponseBody\networkInterfaceSets\associatedPublicIp;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCNetworkInterfacesResponseBody\networkInterfaceSets\ipv6Sets;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCNetworkInterfacesResponseBody\networkInterfaceSets\privateIpSets;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCNetworkInterfacesResponseBody\networkInterfaceSets\tags;

class networkInterfaceSets extends Model
{
    /**
     * @var associatedPublicIp
     */
    public $associatedPublicIp;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var ipv6Sets[]
     */
    public $ipv6Sets;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var privateIpSets[]
     */
    public $privateIpSets;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $securityGroupIds;

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
    public $type;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'associatedPublicIp' => 'AssociatedPublicIp',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'ipv6Sets' => 'Ipv6Sets',
        'macAddress' => 'MacAddress',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'privateIpSets' => 'PrivateIpSets',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupIds' => 'SecurityGroupIds',
        'status' => 'Status',
        'tags' => 'Tags',
        'type' => 'Type',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->associatedPublicIp) {
            $this->associatedPublicIp->validate();
        }
        if (\is_array($this->ipv6Sets)) {
            Model::validateArray($this->ipv6Sets);
        }
        if (\is_array($this->privateIpSets)) {
            Model::validateArray($this->privateIpSets);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedPublicIp) {
            $res['AssociatedPublicIp'] = null !== $this->associatedPublicIp ? $this->associatedPublicIp->toArray($noStream) : $this->associatedPublicIp;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ipv6Sets) {
            if (\is_array($this->ipv6Sets)) {
                $res['Ipv6Sets'] = [];
                $n1 = 0;
                foreach ($this->ipv6Sets as $item1) {
                    $res['Ipv6Sets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->privateIpSets) {
            if (\is_array($this->privateIpSets)) {
                $res['PrivateIpSets'] = [];
                $n1 = 0;
                foreach ($this->privateIpSets as $item1) {
                    $res['PrivateIpSets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AssociatedPublicIp'])) {
            $model->associatedPublicIp = associatedPublicIp::fromMap($map['AssociatedPublicIp']);
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ipv6Sets'])) {
            if (!empty($map['Ipv6Sets'])) {
                $model->ipv6Sets = [];
                $n1 = 0;
                foreach ($map['Ipv6Sets'] as $item1) {
                    $model->ipv6Sets[$n1] = ipv6Sets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['PrivateIpSets'])) {
            if (!empty($map['PrivateIpSets'])) {
                $model->privateIpSets = [];
                $n1 = 0;
                foreach ($map['PrivateIpSets'] as $item1) {
                    $model->privateIpSets[$n1] = privateIpSets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
