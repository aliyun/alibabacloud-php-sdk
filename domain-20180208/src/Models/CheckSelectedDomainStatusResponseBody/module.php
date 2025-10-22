<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\CheckSelectedDomainStatusResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $deadDate;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $premium;

    /**
     * @var float
     */
    public $price;

    /**
     * @var int
     */
    public $regDate;
    protected $_name = [
        'deadDate' => 'DeadDate',
        'domain' => 'Domain',
        'endTime' => 'EndTime',
        'premium' => 'Premium',
        'price' => 'Price',
        'regDate' => 'RegDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deadDate) {
            $res['DeadDate'] = $this->deadDate;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->premium) {
            $res['Premium'] = $this->premium;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->regDate) {
            $res['RegDate'] = $this->regDate;
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
        if (isset($map['DeadDate'])) {
            $model->deadDate = $map['DeadDate'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Premium'])) {
            $model->premium = $map['Premium'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['RegDate'])) {
            $model->regDate = $map['RegDate'];
        }

        return $model;
    }
}
