<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenChildInstanceRouteEntriesToAttachmentResponseBody;

use AlibabaCloud\Dara\Model;

class routeEntry extends Model
{
    /**
     * @var string
     */
    public $cenId;
    /**
     * @var string
     */
    public $childInstanceRouteTableId;
    /**
     * @var string
     */
    public $destinationCidrBlock;
    /**
     * @var string
     */
    public $serviceType;
    /**
     * @var string
     */
    public $status;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
