<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeFaceGuardRiskRequest extends Model
{
    /**
     * @example aba9830f471a4335af4612c8adaa91b0
     *
     * @var string
     */
    public $bizId;

    /**
     * @example McozS1ZWRcRZStlERcZZo_QOytx5jcgZoZJEoRLOxxxxxxx
     *
     * @var string
     */
    public $deviceToken;

    /**
     * @example e0c34a77f5ac40a5aa5e6ed20c35xxxx
     *
     * @var string
     */
    public $outerOrderNo;

    /**
     * @example FACE_GUARD
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'bizId'        => 'BizId',
        'deviceToken'  => 'DeviceToken',
        'outerOrderNo' => 'OuterOrderNo',
        'productCode'  => 'ProductCode',
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
        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaceGuardRiskRequest
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
        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
