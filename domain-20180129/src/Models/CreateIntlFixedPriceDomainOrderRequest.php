<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class CreateIntlFixedPriceDomainOrderRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $expectedPrice;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'contactId' => 'ContactId',
        'domain' => 'Domain',
        'expectedPrice' => 'ExpectedPrice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
