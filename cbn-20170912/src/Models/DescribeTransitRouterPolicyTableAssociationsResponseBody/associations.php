<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouterPolicyTableAssociationsResponseBody;

use AlibabaCloud\Dara\Model;

class associations extends Model
{
    /**
     * @var string
     */
    public $associationId;

    /**
     * @var string
     */
    public $attachmentId;

    /**
     * @var string
     */
    public $policyTableId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'associationId' => 'AssociationId',
        'attachmentId' => 'AttachmentId',
        'policyTableId' => 'PolicyTableId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associationId) {
            $res['AssociationId'] = $this->associationId;
        }

        if (null !== $this->attachmentId) {
            $res['AttachmentId'] = $this->attachmentId;
        }

        if (null !== $this->policyTableId) {
            $res['PolicyTableId'] = $this->policyTableId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AssociationId'])) {
            $model->associationId = $map['AssociationId'];
        }

        if (isset($map['AttachmentId'])) {
            $model->attachmentId = $map['AttachmentId'];
        }

        if (isset($map['PolicyTableId'])) {
            $model->policyTableId = $map['PolicyTableId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
