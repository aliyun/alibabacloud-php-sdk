<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DeleteCdnDeliverTaskRequest extends Model
{
    /**
     * @description The ID of the tracking task that you want to delete. You can call the [DescribeCdnDeliverList](~~270877~~) operation to query task IDs.
     *
     * @example 1
     *
     * @var int
     */
    public $deliverId;
    protected $_name = [
        'deliverId' => 'DeliverId',
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

        return $model;
    }
}
