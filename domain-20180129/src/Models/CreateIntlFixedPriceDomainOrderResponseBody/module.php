<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\CreateIntlFixedPriceDomainOrderResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 31199295f2074ce895645d386cb2****
     *
     * @var string
     */
    public $orderNo;

    /**
     * @example 100.00
     *
     * @var int
     */
    public $payPrice;

    /**
     * @example https://
     *
     * @var string
     */
    public $payUrl;
    protected $_name = [
        'domain'   => 'Domain',
        'orderNo'  => 'OrderNo',
        'payPrice' => 'PayPrice',
        'payUrl'   => 'PayUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return module
     */
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
