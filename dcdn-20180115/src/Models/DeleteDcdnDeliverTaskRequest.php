<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DeleteDcdnDeliverTaskRequest extends Model
{
    /**
     * @description The IDs of the tracking tasks that you want to delete. You can call the [DescribeCdnDeliverList](~~270043~~) operation to query task IDs.
     *
     * @example 92
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
     * @return DeleteDcdnDeliverTaskRequest
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
