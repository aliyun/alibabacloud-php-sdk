<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\btripCancelRule\btripHotelCancelPolicyDTO;
use AlibabaCloud\Tea\Model;

class btripCancelRule extends Model
{
    /**
     * @var btripHotelCancelPolicyDTO
     */
    public $btripHotelCancelPolicyDTO;

    /**
     * @var string
     */
    public $cancelPolicyTitle;

    /**
     * @example 2023-02-27
     *
     * @var string
     */
    public $checkIn;
    protected $_name = [
        'btripHotelCancelPolicyDTO' => 'btrip_hotel_cancel_policy_d_t_o',
        'cancelPolicyTitle'         => 'cancel_policy_title',
        'checkIn'                   => 'check_in',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripHotelCancelPolicyDTO) {
            $res['btrip_hotel_cancel_policy_d_t_o'] = null !== $this->btripHotelCancelPolicyDTO ? $this->btripHotelCancelPolicyDTO->toMap() : null;
        }
        if (null !== $this->cancelPolicyTitle) {
            $res['cancel_policy_title'] = $this->cancelPolicyTitle;
        }
        if (null !== $this->checkIn) {
            $res['check_in'] = $this->checkIn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return btripCancelRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_hotel_cancel_policy_d_t_o'])) {
            $model->btripHotelCancelPolicyDTO = btripHotelCancelPolicyDTO::fromMap($map['btrip_hotel_cancel_policy_d_t_o']);
        }
        if (isset($map['cancel_policy_title'])) {
            $model->cancelPolicyTitle = $map['cancel_policy_title'];
        }
        if (isset($map['check_in'])) {
            $model->checkIn = $map['check_in'];
        }

        return $model;
    }
}
