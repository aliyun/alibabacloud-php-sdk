<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageOrderListNewResponseBody\list_;

use AlibabaCloud\Dara\Model;

class smsPackageOrderResponse extends Model
{
    /**
     * @var string
     */
    public $effectDate;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $payPrice;

    /**
     * @var int
     */
    public $state;
    protected $_name = [
        'effectDate' => 'EffectDate',
        'expireDate' => 'ExpireDate',
        'name' => 'Name',
        'payPrice' => 'PayPrice',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectDate) {
            $res['EffectDate'] = $this->effectDate;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->payPrice) {
            $res['PayPrice'] = $this->payPrice;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['EffectDate'])) {
            $model->effectDate = $map['EffectDate'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PayPrice'])) {
            $model->payPrice = $map['PayPrice'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
