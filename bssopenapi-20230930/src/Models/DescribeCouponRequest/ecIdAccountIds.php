<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponRequest;

use AlibabaCloud\Tea\Model;

class ecIdAccountIds extends Model
{
    /**
     * @var int[]
     */
    public $accountIds;

    /**
     * @description This parameter is required.
     *
     * @example 1501603440974415
     *
     * @var string
     */
    public $ecId;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'ecId' => 'EcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->ecId) {
            $res['EcId'] = $this->ecId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecIdAccountIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['EcId'])) {
            $model->ecId = $map['EcId'];
        }

        return $model;
    }
}
