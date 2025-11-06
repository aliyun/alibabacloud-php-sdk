<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainRealTimePriceResponseBody\module;

use AlibabaCloud\Dara\Model;

class domainPrices extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $avail;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $period;

    /**
     * @var bool
     */
    public $premium;

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'action' => 'Action',
        'avail' => 'Avail',
        'currency' => 'Currency',
        'domainName' => 'DomainName',
        'period' => 'Period',
        'premium' => 'Premium',
        'price' => 'Price',
        'reason' => 'Reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->avail) {
            $res['Avail'] = $this->avail;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->premium) {
            $res['Premium'] = $this->premium;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['Avail'])) {
            $model->avail = $map['Avail'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['Premium'])) {
            $model->premium = $map['Premium'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
