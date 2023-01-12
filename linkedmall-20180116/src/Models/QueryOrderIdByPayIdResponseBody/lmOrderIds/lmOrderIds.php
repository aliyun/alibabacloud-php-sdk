<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderIdByPayIdResponseBody\lmOrderIds;

use AlibabaCloud\Tea\Model;

class lmOrderIds extends Model
{
    /**
     * @example 45******89
     *
     * @var int
     */
    public $lmOrderId;
    protected $_name = [
        'lmOrderId' => 'LmOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmOrderId) {
            $res['LmOrderId'] = $this->lmOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmOrderIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmOrderId'])) {
            $model->lmOrderId = $map['LmOrderId'];
        }

        return $model;
    }
}
