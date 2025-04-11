<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class transitRouterMulticastGroups extends Model
{
    /**
     * @var string
     */
    public $groupIpAddress;

    /**
     * @var bool
     */
    public $groupMember;

    /**
     * @var bool
     */
    public $groupSource;

    /**
     * @var string
     */
    public $memberType;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $peerTransitRouterMulticastDomainId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @var string
     */
    public $transitRouterMulticastDomainId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'groupIpAddress' => 'GroupIpAddress',
        'groupMember' => 'GroupMember',
        'groupSource' => 'GroupSource',
        'memberType' => 'MemberType',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'peerTransitRouterMulticastDomainId' => 'PeerTransitRouterMulticastDomainId',
        'resourceId' => 'ResourceId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceType' => 'ResourceType',
        'sourceType' => 'SourceType',
        'status' => 'Status',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
        'transitRouterMulticastDomainId' => 'TransitRouterMulticastDomainId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
