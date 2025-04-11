<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteTablePropagationsResponseBody;

use AlibabaCloud\Dara\Model;

class transitRouterPropagations extends Model
{
    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

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
    public $transitRouterRouteTableId;
    protected $_name = [
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
        'transitRouterRouteTableId' => 'TransitRouterRouteTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
