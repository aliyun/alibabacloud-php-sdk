<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenChildInstanceRouteEntriesToAttachmentResponseBody;

use AlibabaCloud\Tea\Model;

class routeEntry extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-9adwg6ghpq8oq4dp7q
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The ID of the route table configured on the network instance.
     *
     * @example vtb-bp1tlaj1c4nxr2t3e****
     *
     * @var string
     */
    public $childInstanceRouteTableId;

    /**
     * @description The destination CIDR block of the route.
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description Indicates whether the route is hosted. If the parameter is empty, the route is not hosted. A value of TR indicates that the route is hosted on a transit router.
     *
     * @example TR
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The status of the route. Valid values:
     *
     *   **Available**: The route is available.
     *   **Pending**: The route is being configured.
     *   **Modifying**: the route is being modified.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the network instance connection.
     *
     * @example tr-attach-y463sghkkv1loe****
     *
     * @var string
     */
    public $transitRouterAttachmentId;
    protected $_name = [
        'cenId'                     => 'CenId',
        'childInstanceRouteTableId' => 'ChildInstanceRouteTableId',
        'destinationCidrBlock'      => 'DestinationCidrBlock',
        'serviceType'               => 'ServiceType',
        'status'                    => 'Status',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->childInstanceRouteTableId) {
            $res['ChildInstanceRouteTableId'] = $this->childInstanceRouteTableId;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ChildInstanceRouteTableId'])) {
            $model->childInstanceRouteTableId = $map['ChildInstanceRouteTableId'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }

        return $model;
    }
}
