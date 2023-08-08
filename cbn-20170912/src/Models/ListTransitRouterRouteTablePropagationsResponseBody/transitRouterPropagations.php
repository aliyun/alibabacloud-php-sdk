<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablePropagationsResponseBody;

use AlibabaCloud\Tea\Model;

class transitRouterPropagations extends Model
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
     *   **VPN**: VPN connection
     *
     * @example VPC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the route learning correlation. Valid values:
     *
     *   **Enabling**: being enabled
     *   **Disabling**: being disabled
     *   **Active**: available
     *   **Deleted**: deleted
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the network instance connection.
     *
     * @example tr-attach-vx6iwhjr1x1j78****
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
     * @return transitRouterPropagations
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
