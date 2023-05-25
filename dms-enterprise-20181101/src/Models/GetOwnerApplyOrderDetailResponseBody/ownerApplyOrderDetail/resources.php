<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponseBody\ownerApplyOrderDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOwnerApplyOrderDetailResponseBody\ownerApplyOrderDetail\resources\resourceDetail;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description Indicates whether the database is a logical database. Valid values:
     *
     *   **true**: The instance is a logical database.
     *   **false**: The instance is not a logical database.
     *
     * @example true
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The details of the resource.
     *
     * @var resourceDetail
     */
    public $resourceDetail;

    /**
     * @description The ID of the resource.
     *
     * @example 12345
     *
     * @var string
     */
    public $targetId;
    protected $_name = [
        'logic'          => 'Logic',
        'resourceDetail' => 'ResourceDetail',
        'targetId'       => 'TargetId',
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
        if (null !== $this->resourceDetail) {
            $res['ResourceDetail'] = null !== $this->resourceDetail ? $this->resourceDetail->toMap() : null;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
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
        if (isset($map['ResourceDetail'])) {
            $model->resourceDetail = resourceDetail::fromMap($map['ResourceDetail']);
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
