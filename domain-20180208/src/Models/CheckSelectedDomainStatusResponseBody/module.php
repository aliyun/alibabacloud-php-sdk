<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\CheckSelectedDomainStatusResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1567353497
     *
     * @var int
     */
    public $deadDate;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1567353497
     *
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $premium;

    /**
     * @example 20.00
     *
     * @var float
     */
    public $price;

    /**
     * @example 1566353497
     *
     * @var int
     */
    public $regDate;
    protected $_name = [
        'deadDate' => 'DeadDate',
        'domain'   => 'Domain',
        'endTime'  => 'EndTime',
        'premium'  => 'Premium',
        'price'    => 'Price',
        'regDate'  => 'RegDate',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return module
     */
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
