<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DeleteCdnDeliverTaskRequest extends Model
{
    /**
     * @description The IDs of the tracking tasks that you want to delete. You can call the [DescribeCdnDeliverList](~~270877~~) operation to query task IDs.
     *
     * @example 1
     *
     * @var int
     */
    public $deliverId;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'deliverId' => 'DeliverId',
        'ownerId'   => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliverId) {
            $res['DeliverId'] = $this->deliverId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCdnDeliverTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliverId'])) {
            $model->deliverId = $map['DeliverId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
