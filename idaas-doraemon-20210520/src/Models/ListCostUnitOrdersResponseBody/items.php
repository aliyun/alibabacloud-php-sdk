<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListCostUnitOrdersResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 215222637610732
     *
     * @var string
     */
    public $aliOrderCode;

    /**
     * @example idaas_auth_public_cn-pl32pciy101
     *
     * @var string
     */
    public $aliOrderInstanceId;

    /**
     * @example 1646028448000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $exhausted;

    /**
     * @example 1923321600000
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @example VALID
     *
     * @var string
     */
    public $orderStatus;

    /**
     * @example 1923321600000
     *
     * @var int
     */
    public $refundTime;

    /**
     * @example 100000
     *
     * @var int
     */
    public $totalCostUnit;

    /**
     * @example 100
     *
     * @var int
     */
    public $usedCostUnit;
    protected $_name = [
        'aliOrderCode'       => 'AliOrderCode',
        'aliOrderInstanceId' => 'AliOrderInstanceId',
        'createTime'         => 'CreateTime',
        'exhausted'          => 'Exhausted',
        'expiredTime'        => 'ExpiredTime',
        'orderStatus'        => 'OrderStatus',
        'refundTime'         => 'RefundTime',
        'totalCostUnit'      => 'TotalCostUnit',
        'usedCostUnit'       => 'UsedCostUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliOrderCode) {
            $res['AliOrderCode'] = $this->aliOrderCode;
        }
        if (null !== $this->aliOrderInstanceId) {
            $res['AliOrderInstanceId'] = $this->aliOrderInstanceId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->exhausted) {
            $res['Exhausted'] = $this->exhausted;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->refundTime) {
            $res['RefundTime'] = $this->refundTime;
        }
        if (null !== $this->totalCostUnit) {
            $res['TotalCostUnit'] = $this->totalCostUnit;
        }
        if (null !== $this->usedCostUnit) {
            $res['UsedCostUnit'] = $this->usedCostUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliOrderCode'])) {
            $model->aliOrderCode = $map['AliOrderCode'];
        }
        if (isset($map['AliOrderInstanceId'])) {
            $model->aliOrderInstanceId = $map['AliOrderInstanceId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Exhausted'])) {
            $model->exhausted = $map['Exhausted'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['RefundTime'])) {
            $model->refundTime = $map['RefundTime'];
        }
        if (isset($map['TotalCostUnit'])) {
            $model->totalCostUnit = $map['TotalCostUnit'];
        }
        if (isset($map['UsedCostUnit'])) {
            $model->usedCostUnit = $map['UsedCostUnit'];
        }

        return $model;
    }
}
