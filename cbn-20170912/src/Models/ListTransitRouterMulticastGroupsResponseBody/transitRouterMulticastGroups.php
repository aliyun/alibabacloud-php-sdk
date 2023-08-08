<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class transitRouterMulticastGroups extends Model
{
    /**
     * @description The IP address of the multicast group to which the multicast resource belongs.
     *
     * @example 239.XX.XX.2
     *
     * @var string
     */
    public $groupIpAddress;

    /**
     * @description Indicates whether the multicast resource is a multicast member. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $groupMember;

    /**
     * @description Indicates whether the multicast resource is a multicast source. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $groupSource;

    /**
     * @description The type of the multicast source.
     *
     * If the value is **Static**, the multicast source is manually specified.
     * @example Static
     *
     * @var string
     */
    public $memberType;

    /**
     * @description The ID of the ENI, which is a multicast resource.
     *
     * @example eni-p0weuda3lszwzjly****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The ID of the multicast domain associated with the multicast resource that is deployed across regions.
     *
     * @example tr-mcast-domain-91wpg6wbhchjeq****
     *
     * @var string
     */
    public $peerTransitRouterMulticastDomainId;

    /**
     * @description The ID of the resource associated with the multicast resource.
     *
     * @example vpc-p0w9alkte4w2htrqe****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the multicast resource belongs.
     *
     * @example 253460731706911258
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the multicast resource. Valid values:
     *
     *   **VPC**: The multicast resource is in a VPC.
     *   **TR**: The multicast resource is deployed across regions.
     *
     * @example VPC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The type of the multicast member.
     *
     * If the value is **Static**, the multicast member is manually specified.
     * @example Static
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The status of the multicast resource. Valid values:
     *
     *   **Registering**: being created
     *   **Registered**: available
     *   **Deregistering**: being deleted
     *
     * @example Registered
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the network instance connection.
     *
     * @example tr-attach-g3kz2k3u76amsk****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The ID of the multicast domain.
     *
     * @example tr-mcast-domain-kx0vk0v7fz8kx4****
     *
     * @var string
     */
    public $transitRouterMulticastDomainId;

    /**
     * @description The ID of the vSwitch to which the multicast resource belongs.
     *
     * @example vsw-p0w9s2ig1jnwgrbzl****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'groupIpAddress'                     => 'GroupIpAddress',
        'groupMember'                        => 'GroupMember',
        'groupSource'                        => 'GroupSource',
        'memberType'                         => 'MemberType',
        'networkInterfaceId'                 => 'NetworkInterfaceId',
        'peerTransitRouterMulticastDomainId' => 'PeerTransitRouterMulticastDomainId',
        'resourceId'                         => 'ResourceId',
        'resourceOwnerId'                    => 'ResourceOwnerId',
        'resourceType'                       => 'ResourceType',
        'sourceType'                         => 'SourceType',
        'status'                             => 'Status',
        'transitRouterAttachmentId'          => 'TransitRouterAttachmentId',
        'transitRouterMulticastDomainId'     => 'TransitRouterMulticastDomainId',
        'vSwitchId'                          => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupIpAddress) {
            $res['GroupIpAddress'] = $this->groupIpAddress;
        }
        if (null !== $this->groupMember) {
            $res['GroupMember'] = $this->groupMember;
        }
        if (null !== $this->groupSource) {
            $res['GroupSource'] = $this->groupSource;
        }
        if (null !== $this->memberType) {
            $res['MemberType'] = $this->memberType;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->peerTransitRouterMulticastDomainId) {
            $res['PeerTransitRouterMulticastDomainId'] = $this->peerTransitRouterMulticastDomainId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }
        if (null !== $this->transitRouterMulticastDomainId) {
            $res['TransitRouterMulticastDomainId'] = $this->transitRouterMulticastDomainId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transitRouterMulticastGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupIpAddress'])) {
            $model->groupIpAddress = $map['GroupIpAddress'];
        }
        if (isset($map['GroupMember'])) {
            $model->groupMember = $map['GroupMember'];
        }
        if (isset($map['GroupSource'])) {
            $model->groupSource = $map['GroupSource'];
        }
        if (isset($map['MemberType'])) {
            $model->memberType = $map['MemberType'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['PeerTransitRouterMulticastDomainId'])) {
            $model->peerTransitRouterMulticastDomainId = $map['PeerTransitRouterMulticastDomainId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }
        if (isset($map['TransitRouterMulticastDomainId'])) {
            $model->transitRouterMulticastDomainId = $map['TransitRouterMulticastDomainId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
