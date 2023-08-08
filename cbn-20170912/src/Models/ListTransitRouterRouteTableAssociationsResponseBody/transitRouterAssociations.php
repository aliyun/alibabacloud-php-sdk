<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTableAssociationsResponseBody;

use AlibabaCloud\Tea\Model;

class transitRouterAssociations extends Model
{
    /**
     * @description The ID of the next hop.
     *
     * @example vpc-bp1h8vbrbcgohcju5****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of next hop. Valid values:
     *
     *   **VPC**: VPC
     *   **VBR**: VBR
     *   **TR**: transit router
     *   **VPN** :VPN attachment
     *
     * @example VPC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the associated forwarding correlation. Valid values:
     *
     *   **Active**: The associated forwarding correlation is available.
     *   **Associating**: The associated forwarding correlation is being created.
     *   **Dissociating**: The associated forwarding correlation is being deleted.
     *   **Deleted**: The associated forwarding correlation is deleted.
     *
     * @example Associating
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the network instance connection.
     *
     * @example tr-attach-nls9fzkfat8934****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The ID of the route table of the Enterprise Edition transit router.
     *
     * @example vtb-bp1dudbh2d5na6b50****
     *
     * @var string
     */
    public $transitRouterRouteTableId;
    protected $_name = [
        'resourceId'                => 'ResourceId',
        'resourceType'              => 'ResourceType',
        'status'                    => 'Status',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
        'transitRouterRouteTableId' => 'TransitRouterRouteTableId',
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }
        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transitRouterAssociations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
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
        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }

        return $model;
    }
}
