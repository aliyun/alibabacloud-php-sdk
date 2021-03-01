<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponseBody\ownerApplyOrderDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponseBody\ownerApplyOrderDetail\resources\resourceDetail;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var resourceDetail
     */
    public $resourceDetail;
    protected $_name = [
        'logic'          => 'Logic',
        'targetId'       => 'TargetId',
        'resourceDetail' => 'ResourceDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->resourceDetail) {
            $res['ResourceDetail'] = null !== $this->resourceDetail ? $this->resourceDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['ResourceDetail'])) {
            $model->resourceDetail = resourceDetail::fromMap($map['ResourceDetail']);
        }

        return $model;
    }
}
