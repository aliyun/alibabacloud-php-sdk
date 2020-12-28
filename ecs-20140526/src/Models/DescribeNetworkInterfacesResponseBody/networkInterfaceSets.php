<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\associatedPublicIp;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\attachment;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\ipv6Sets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\privateIpSets;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\tags;
use AlibabaCloud\Tea\Model;

class networkInterfaceSets extends Model
{
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
    public $vpcId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var attachment
     */
    public $attachment;

    /**
     * @var int
     */
    public $serviceID;

    /**
     * @var ipv6Sets[]
     */
    public $ipv6Sets;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var associatedPublicIp
     */
    public $associatedPublicIp;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var int
     */
    public $queueNumber;

    /**
     * @var privateIpSets[]
     */
    public $privateIpSets;
    protected $_name = [
        'status'               => 'Status',
        'type'                 => 'Type',
        'vpcId'                => 'VpcId',
        'creationTime'         => 'CreationTime',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'macAddress'           => 'MacAddress',
        'networkInterfaceId'   => 'NetworkInterfaceId',
        'tags'                 => 'Tags',
        'attachment'           => 'Attachment',
        'serviceID'            => 'ServiceID',
        'ipv6Sets'             => 'Ipv6Sets',
        'instanceId'           => 'InstanceId',
        'ownerId'              => 'OwnerId',
        'securityGroupIds'     => 'SecurityGroupIds',
        'serviceManaged'       => 'ServiceManaged',
        'vSwitchId'            => 'VSwitchId',
        'description'          => 'Description',
        'resourceGroupId'      => 'ResourceGroupId',
        'associatedPublicIp'   => 'AssociatedPublicIp',
        'zoneId'               => 'ZoneId',
        'privateIpAddress'     => 'PrivateIpAddress',
        'queueNumber'          => 'QueueNumber',
        'privateIpSets'        => 'PrivateIpSets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
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
        if (null !== $this->attachment) {
            $res['Attachment'] = null !== $this->attachment ? $this->attachment->toMap() : null;
        }
        if (null !== $this->serviceID) {
            $res['ServiceID'] = $this->serviceID;
        }
        if (null !== $this->ipv6Sets) {
            $res['Ipv6Sets'] = [];
            if (null !== $this->ipv6Sets && \is_array($this->ipv6Sets)) {
                $n = 0;
                foreach ($this->ipv6Sets as $item) {
                    $res['Ipv6Sets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->associatedPublicIp) {
            $res['AssociatedPublicIp'] = null !== $this->associatedPublicIp ? $this->associatedPublicIp->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->queueNumber) {
            $res['QueueNumber'] = $this->queueNumber;
        }
        if (null !== $this->privateIpSets) {
            $res['PrivateIpSets'] = [];
            if (null !== $this->privateIpSets && \is_array($this->privateIpSets)) {
                $n = 0;
                foreach ($this->privateIpSets as $item) {
                    $res['PrivateIpSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfaceSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
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
        if (isset($map['Attachment'])) {
            $model->attachment = attachment::fromMap($map['Attachment']);
        }
        if (isset($map['ServiceID'])) {
            $model->serviceID = $map['ServiceID'];
        }
        if (isset($map['Ipv6Sets'])) {
            if (!empty($map['Ipv6Sets'])) {
                $model->ipv6Sets = [];
                $n               = 0;
                foreach ($map['Ipv6Sets'] as $item) {
                    $model->ipv6Sets[$n++] = null !== $item ? ipv6Sets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['AssociatedPublicIp'])) {
            $model->associatedPublicIp = associatedPublicIp::fromMap($map['AssociatedPublicIp']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['QueueNumber'])) {
            $model->queueNumber = $map['QueueNumber'];
        }
        if (isset($map['PrivateIpSets'])) {
            if (!empty($map['PrivateIpSets'])) {
                $model->privateIpSets = [];
                $n                    = 0;
                foreach ($map['PrivateIpSets'] as $item) {
                    $model->privateIpSets[$n++] = null !== $item ? privateIpSets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
