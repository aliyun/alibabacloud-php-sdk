<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class HotelPricePullRequest extends Model
{
    /**
     * @var string
     */
    public $btripUserId;

    /**
     * @var string
     */
    public $checkIn;

    /**
     * @var string
     */
    public $checkOut;

    /**
     * @var int
     */
    public $cityCode;

    /**
     * @var string[]
     */
    public $hotelIds;

    /**
     * @var int
     */
    public $paymentType;
    protected $_name = [
        'btripUserId' => 'btrip_user_id',
        'checkIn' => 'check_in',
        'checkOut' => 'check_out',
        'cityCode' => 'city_code',
        'hotelIds' => 'hotel_ids',
        'paymentType' => 'payment_type',
    ];

    public function validate()
    {
        if (\is_array($this->hotelIds)) {
            Model::validateArray($this->hotelIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }

        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }

        if (null !== $this->checkOut) {
            $res['check_out'] = $this->checkOut;
        }

        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }

        if (null !== $this->hotelIds) {
            if (\is_array($this->hotelIds)) {
                $res['hotel_ids'] = [];
                $n1 = 0;
                foreach ($this->hotelIds as $item1) {
                    $res['hotel_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paymentType) {
            $res['payment_type'] = $this->paymentType;
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
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }

        if (isset($map['check_in'])) {
            $model->checkIn = $map['check_in'];
        }

        if (isset($map['check_out'])) {
            $model->checkOut = $map['check_out'];
        }

        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }

        if (isset($map['hotel_ids'])) {
            if (!empty($map['hotel_ids'])) {
                $model->hotelIds = [];
                $n1 = 0;
                foreach ($map['hotel_ids'] as $item1) {
                    $model->hotelIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['payment_type'])) {
            $model->paymentType = $map['payment_type'];
        }

        return $model;
    }
}
