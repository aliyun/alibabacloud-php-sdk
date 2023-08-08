<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterMulticastDomainAssociationsResponseBody;

use AlibabaCloud\Tea\Model;

class transitRouterMulticastAssociations extends Model
{
    /**
     * @description The ID of the resource associated with the multicast domain.
     *
     * @example vpc-p0w9b7g9l90yofr0n****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource associated with the multicast domain belongs.
     *
     * @example 1210123456123456
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of resource associated with the multicast domain.
     *
     * Valid value: **VPC**.
     * @example VPC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The association status. Valid values:
     *
     *   **Associated**: The resource is associated with the multicast domain.
     *   **Associating**: The resource is being associated with the multicast domain.
     *   **Dissociating**: The resource is being disassociated from the multicast domain.
     *
     * @example Dissociating
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the network instance connection.
     *
     * @example tr-attach-p90y3ymbbwuvy5****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The ID of the multicast domain.
     *
     * @example tr-mcast-domain-91wpg6wbhchjeq****
     *
     * @var string
     */
    public $transitRouterMulticastDomainId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-p0wxk12u6okfkr8xy****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'resourceId'                     => 'ResourceId',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'resourceType'                   => 'ResourceType',
        'status'                         => 'Status',
        'transitRouterAttachmentId'      => 'TransitRouterAttachmentId',
        'transitRouterMulticastDomainId' => 'TransitRouterMulticastDomainId',
        'vSwitchId'                      => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
     * @return transitRouterMulticastAssociations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
