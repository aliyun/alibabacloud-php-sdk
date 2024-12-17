<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\ratePlanInfo;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\ratePlanInfo\btripHotelCancelPolicyDTO\btripHotelCancelPolicyInfoDTOList;
use AlibabaCloud\Tea\Model;

class btripHotelCancelPolicyDTO extends Model
{
    /**
     * @var btripHotelCancelPolicyInfoDTOList[]
     */
    public $btripHotelCancelPolicyInfoDTOList;

    /**
     * @var int
     */
    public $cancelPolicyType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $shortDesc;
    protected $_name = [
        'btripHotelCancelPolicyInfoDTOList' => 'btrip_hotel_cancel_policy_info_d_t_o_list',
        'cancelPolicyType'                  => 'cancel_policy_type',
        'content'                           => 'content',
        'shortDesc'                         => 'short_desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->btripHotelCancelPolicyInfoDTOList) {
            $res['btrip_hotel_cancel_policy_info_d_t_o_list'] = [];
            if (null !== $this->btripHotelCancelPolicyInfoDTOList && \is_array($this->btripHotelCancelPolicyInfoDTOList)) {
                $n = 0;
                foreach ($this->btripHotelCancelPolicyInfoDTOList as $item) {
                    $res['btrip_hotel_cancel_policy_info_d_t_o_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cancelPolicyType) {
            $res['cancel_policy_type'] = $this->cancelPolicyType;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->shortDesc) {
            $res['short_desc'] = $this->shortDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return btripHotelCancelPolicyDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_hotel_cancel_policy_info_d_t_o_list'])) {
            if (!empty($map['btrip_hotel_cancel_policy_info_d_t_o_list'])) {
                $model->btripHotelCancelPolicyInfoDTOList = [];
                $n                                        = 0;
                foreach ($map['btrip_hotel_cancel_policy_info_d_t_o_list'] as $item) {
                    $model->btripHotelCancelPolicyInfoDTOList[$n++] = null !== $item ? btripHotelCancelPolicyInfoDTOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cancel_policy_type'])) {
            $model->cancelPolicyType = $map['cancel_policy_type'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['short_desc'])) {
            $model->shortDesc = $map['short_desc'];
        }

        return $model;
    }
}
