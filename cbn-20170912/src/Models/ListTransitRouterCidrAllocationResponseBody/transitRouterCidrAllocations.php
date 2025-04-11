<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterCidrAllocationResponseBody;

use AlibabaCloud\Dara\Model;

class transitRouterCidrAllocations extends Model
{
    /**
     * @var string
     */
    public $allocatedCidrBlock;

    /**
     * @var string
     */
    public $attachmentId;

    /**
     * @var string
     */
    public $attachmentName;

    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $transitRouterCidrId;
    protected $_name = [
        'allocatedCidrBlock' => 'AllocatedCidrBlock',
        'attachmentId' => 'AttachmentId',
        'attachmentName' => 'AttachmentName',
        'cidr' => 'Cidr',
        'transitRouterCidrId' => 'TransitRouterCidrId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
