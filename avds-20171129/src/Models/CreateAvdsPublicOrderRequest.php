<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class CreateAvdsPublicOrderRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $nameTime;
    protected $_name = [
        'autoPay'       => 'AutoPay',
        'autoUseCoupon' => 'AutoUseCoupon',
        'nameTime'      => 'NameTime',
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
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->nameTime) {
            $res['NameTime'] = $this->nameTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAvdsPublicOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['NameTime'])) {
            $model->nameTime = $map['NameTime'];
        }

        return $model;
    }
}
