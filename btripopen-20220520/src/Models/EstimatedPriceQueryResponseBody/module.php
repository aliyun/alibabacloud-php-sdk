<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\hotelFeeDetail;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryResponseBody\module\trafficFee;
use AlibabaCloud\Tea\Model;

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
        'totalHotelFee'  => 'total_hotel_fee',
        'trafficFee'     => 'traffic_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelFeeDetail) {
            $res['hotel_fee_detail'] = [];
            if (null !== $this->hotelFeeDetail && \is_array($this->hotelFeeDetail)) {
                $n = 0;
                foreach ($this->hotelFeeDetail as $item) {
                    $res['hotel_fee_detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalHotelFee) {
            $res['total_hotel_fee'] = $this->totalHotelFee;
        }
        if (null !== $this->trafficFee) {
            $res['traffic_fee'] = null !== $this->trafficFee ? $this->trafficFee->toMap() : null;
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
        if (isset($map['hotel_fee_detail'])) {
            if (!empty($map['hotel_fee_detail'])) {
                $model->hotelFeeDetail = [];
                $n                     = 0;
                foreach ($map['hotel_fee_detail'] as $item) {
                    $model->hotelFeeDetail[$n++] = null !== $item ? hotelFeeDetail::fromMap($item) : $item;
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
