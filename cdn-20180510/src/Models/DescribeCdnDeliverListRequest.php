<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnDeliverListRequest extends Model
{
    /**
     * @description The ID of the tracking task that you want to query. If you do not specify an ID, all tracking tasks are queried.
     *
     * @example 3
     *
     * @var int
     */
    public $deliverId;
    protected $_name = [
        'deliverId' => 'DeliverId',
    ];

    public function validate() {}

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
     * @return DescribeCdnDeliverListRequest
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
