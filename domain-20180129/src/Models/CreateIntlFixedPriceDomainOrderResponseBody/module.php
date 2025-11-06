<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\CreateIntlFixedPriceDomainOrderResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $orderNo;

    /**
     * @var int
     */
    public $payPrice;

    /**
     * @var string
     */
    public $payUrl;
    protected $_name = [
        'domain' => 'Domain',
        'orderNo' => 'OrderNo',
        'payPrice' => 'PayPrice',
        'payUrl' => 'PayUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }

        if (null !== $this->payPrice) {
            $res['PayPrice'] = $this->payPrice;
        }

        if (null !== $this->payUrl) {
            $res['PayUrl'] = $this->payUrl;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }

        if (isset($map['PayPrice'])) {
            $model->payPrice = $map['PayPrice'];
        }

        if (isset($map['PayUrl'])) {
            $model->payUrl = $map['PayUrl'];
        }

        return $model;
    }
}
