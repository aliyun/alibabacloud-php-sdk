<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\hotelFeeDetail;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee;

class module extends Model
{
    /**
     * @var hotelFeeDetail[]
     */
    public $hotelFeeDetail;

    /**
     * @var int
     */
    public $totalHotelFee;

    /**
     * @var trafficFee
     */
    public $trafficFee;
    protected $_name = [
        'hotelFeeDetail' => 'hotel_fee_detail',
        'totalHotelFee' => 'total_hotel_fee',
        'trafficFee' => 'traffic_fee',
    ];

    public function validate()
    {
        if (\is_array($this->hotelFeeDetail)) {
            Model::validateArray($this->hotelFeeDetail);
        }
        if (null !== $this->trafficFee) {
            $this->trafficFee->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotelFeeDetail) {
            if (\is_array($this->hotelFeeDetail)) {
                $res['hotel_fee_detail'] = [];
                $n1 = 0;
                foreach ($this->hotelFeeDetail as $item1) {
                    $res['hotel_fee_detail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalHotelFee) {
            $res['total_hotel_fee'] = $this->totalHotelFee;
        }

        if (null !== $this->trafficFee) {
            $res['traffic_fee'] = null !== $this->trafficFee ? $this->trafficFee->toArray($noStream) : $this->trafficFee;
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
        if (isset($map['hotel_fee_detail'])) {
            if (!empty($map['hotel_fee_detail'])) {
                $model->hotelFeeDetail = [];
                $n1 = 0;
                foreach ($map['hotel_fee_detail'] as $item1) {
                    $model->hotelFeeDetail[$n1++] = hotelFeeDetail::fromMap($item1);
                }
            }
        }

        if (isset($map['total_hotel_fee'])) {
            $model->totalHotelFee = $map['total_hotel_fee'];
        }

        if (isset($map['traffic_fee'])) {
            $model->trafficFee = trafficFee::fromMap($map['traffic_fee']);
        }

        return $model;
    }
}
