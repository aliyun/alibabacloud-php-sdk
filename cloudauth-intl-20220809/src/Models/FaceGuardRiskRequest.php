<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class FaceGuardRiskRequest extends Model
{
    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example Tk9SSUQuMS*****************ZDNmNWY5NzQxOW1o
     *
     * @var string
     */
    public $deviceToken;

    /**
     * @example 0c83ce0101d34eff886b1f7d1cdef67f
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example FACE_GUARD
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'bizId'         => 'BizId',
        'deviceToken'   => 'DeviceToken',
        'merchantBizId' => 'MerchantBizId',
        'productCode'   => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->deviceToken) {
            $res['DeviceToken'] = $this->deviceToken;
        }
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceGuardRiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['DeviceToken'])) {
            $model->deviceToken = $map['DeviceToken'];
        }
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
