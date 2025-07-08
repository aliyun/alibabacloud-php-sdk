<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMonthlyBillInfoLeafNewResponseBody\layeredBillDOList;

class QueryMonthlyBillInfoLeafNewResponseBody extends Model
{
    /**
     * @var string
     */
    public $couponPayment;

    /**
     * @var bool
     */
    public $isSeparatedPrice;

    /**
     * @var layeredBillDOList[]
     */
    public $layeredBillDOList;

    /**
     * @var string
     */
    public $packageAmount;

    /**
     * @var string
     */
    public $realPayment;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalPayment;
    protected $_name = [
        'couponPayment' => 'CouponPayment',
        'isSeparatedPrice' => 'IsSeparatedPrice',
        'layeredBillDOList' => 'LayeredBillDOList',
        'packageAmount' => 'PackageAmount',
        'realPayment' => 'RealPayment',
        'requestId' => 'RequestId',
        'totalPayment' => 'TotalPayment',
    ];

    public function validate()
    {
        if (\is_array($this->layeredBillDOList)) {
            Model::validateArray($this->layeredBillDOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->couponPayment) {
            $res['CouponPayment'] = $this->couponPayment;
        }

        if (null !== $this->isSeparatedPrice) {
            $res['IsSeparatedPrice'] = $this->isSeparatedPrice;
        }

        if (null !== $this->layeredBillDOList) {
            if (\is_array($this->layeredBillDOList)) {
                $res['LayeredBillDOList'] = [];
                $n1 = 0;
                foreach ($this->layeredBillDOList as $item1) {
                    $res['LayeredBillDOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->packageAmount) {
            $res['PackageAmount'] = $this->packageAmount;
        }

        if (null !== $this->realPayment) {
            $res['RealPayment'] = $this->realPayment;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalPayment) {
            $res['TotalPayment'] = $this->totalPayment;
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
        if (isset($map['CouponPayment'])) {
            $model->couponPayment = $map['CouponPayment'];
        }

        if (isset($map['IsSeparatedPrice'])) {
            $model->isSeparatedPrice = $map['IsSeparatedPrice'];
        }

        if (isset($map['LayeredBillDOList'])) {
            if (!empty($map['LayeredBillDOList'])) {
                $model->layeredBillDOList = [];
                $n1 = 0;
                foreach ($map['LayeredBillDOList'] as $item1) {
                    $model->layeredBillDOList[$n1] = layeredBillDOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PackageAmount'])) {
            $model->packageAmount = $map['PackageAmount'];
        }

        if (isset($map['RealPayment'])) {
            $model->realPayment = $map['RealPayment'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalPayment'])) {
            $model->totalPayment = $map['TotalPayment'];
        }

        return $model;
    }
}
