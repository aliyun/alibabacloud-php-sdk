<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class DescribeFaceGuardRiskRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;
    /**
     * @var string
     */
    public $deviceToken;
    /**
     * @var string
     */
    public $outerOrderNo;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
