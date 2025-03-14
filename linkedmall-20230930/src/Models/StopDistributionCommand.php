<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class StopDistributionCommand extends Model
{
    /**
     * @var string
     */
    public $lmShopId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @example 2024-12-01 10:01:00
     *
     * @var string
     */
    public $requestTime;

    /**
     * @var string
     */
    public $requestUser;
    protected $_name = [
        'lmShopId' => 'lmShopId',
        'productId' => 'productId',
        'requestId' => 'requestId',
        'requestTime' => 'requestTime',
        'requestUser' => 'requestUser',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmShopId) {
            $res['lmShopId'] = $this->lmShopId;
        }
        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->requestTime) {
            $res['requestTime'] = $this->requestTime;
        }
        if (null !== $this->requestUser) {
            $res['requestUser'] = $this->requestUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopDistributionCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['lmShopId'])) {
            $model->lmShopId = $map['lmShopId'];
        }
        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['requestTime'])) {
            $model->requestTime = $map['requestTime'];
        }
        if (isset($map['requestUser'])) {
            $model->requestUser = $map['requestUser'];
        }

        return $model;
    }
}
