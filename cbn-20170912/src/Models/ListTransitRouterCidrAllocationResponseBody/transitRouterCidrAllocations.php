<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterCidrAllocationResponseBody;

use AlibabaCloud\Tea\Model;

class transitRouterCidrAllocations extends Model
{
    /**
     * @description The CIDR blocks that have IP addresses allocated to network instances.
     *
     * @example 192.168.10.0/28
     *
     * @var string
     */
    public $allocatedCidrBlock;

    /**
     * @description The ID of the network instance connection.
     *
     * @example tr-attach-2nalp6yksc805w****
     *
     * @var string
     */
    public $attachmentId;

    /**
     * @description The name of the network instance connection.
     *
     * @example nametest
     *
     * @var string
     */
    public $attachmentName;

    /**
     * @description The CIDR block of the transit router.
     *
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The ID of the CIDR block.
     *
     * @example cidr-0zv0q9crqpntzz****
     *
     * @var string
     */
    public $transitRouterCidrId;
    protected $_name = [
        'allocatedCidrBlock'  => 'AllocatedCidrBlock',
        'attachmentId'        => 'AttachmentId',
        'attachmentName'      => 'AttachmentName',
        'cidr'                => 'Cidr',
        'transitRouterCidrId' => 'TransitRouterCidrId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocatedCidrBlock) {
            $res['AllocatedCidrBlock'] = $this->allocatedCidrBlock;
        }
        if (null !== $this->attachmentId) {
            $res['AttachmentId'] = $this->attachmentId;
        }
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->transitRouterCidrId) {
            $res['TransitRouterCidrId'] = $this->transitRouterCidrId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transitRouterCidrAllocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocatedCidrBlock'])) {
            $model->allocatedCidrBlock = $map['AllocatedCidrBlock'];
        }
        if (isset($map['AttachmentId'])) {
            $model->attachmentId = $map['AttachmentId'];
        }
        if (isset($map['AttachmentName'])) {
            $model->attachmentName = $map['AttachmentName'];
        }
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['TransitRouterCidrId'])) {
            $model->transitRouterCidrId = $map['TransitRouterCidrId'];
        }

        return $model;
    }
}
