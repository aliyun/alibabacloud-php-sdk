<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CreateIntlFixedPriceDomainOrderRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example 13350500
     *
     * @var int
     */
    public $contactId;

    /**
     * @example appp16.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 58.00
     *
     * @var int
     */
    public $expectedPrice;
    protected $_name = [
        'autoPay'       => 'AutoPay',
        'contactId'     => 'ContactId',
        'domain'        => 'Domain',
        'expectedPrice' => 'ExpectedPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->expectedPrice) {
            $res['ExpectedPrice'] = $this->expectedPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIntlFixedPriceDomainOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ExpectedPrice'])) {
            $model->expectedPrice = $map['ExpectedPrice'];
        }

        return $model;
    }
}
