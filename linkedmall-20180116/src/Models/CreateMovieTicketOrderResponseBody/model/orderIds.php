<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CreateMovieTicketOrderResponseBody\model;

use AlibabaCloud\Tea\Model;

class orderIds extends Model
{
    /**
     * @var string[]
     */
    public $orderIds;
    protected $_name = [
        'orderIds' => 'OrderIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderIds) {
            $res['OrderIds'] = $this->orderIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = $map['OrderIds'];
            }
        }

        return $model;
    }
}
