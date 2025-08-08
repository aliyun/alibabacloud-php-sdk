<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponseBody\ownerApplyOrderDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponseBody\ownerApplyOrderDetail\resources\resourceDetail;

class resources extends Model
{
    /**
     * @var bool
     */
    public $logic;

    /**
     * @var resourceDetail
     */
    public $resourceDetail;

    /**
     * @var string
     */
    public $targetId;
    protected $_name = [
        'logic' => 'Logic',
        'resourceDetail' => 'ResourceDetail',
        'targetId' => 'TargetId',
    ];

    public function validate()
    {
        if (null !== $this->resourceDetail) {
            $this->resourceDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        if (null !== $this->resourceDetail) {
            $res['ResourceDetail'] = null !== $this->resourceDetail ? $this->resourceDetail->toArray($noStream) : $this->resourceDetail;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
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
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        if (isset($map['ResourceDetail'])) {
            $model->resourceDetail = resourceDetail::fromMap($map['ResourceDetail']);
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
