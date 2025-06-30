<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\ratePlanInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\ratePlanInfo\btripHotelCancelPolicyDTO\btripHotelCancelPolicyInfoDTOList;

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
        'cancelPolicyType' => 'cancel_policy_type',
        'content' => 'content',
        'shortDesc' => 'short_desc',
    ];

    public function validate()
    {
        if (\is_array($this->btripHotelCancelPolicyInfoDTOList)) {
            Model::validateArray($this->btripHotelCancelPolicyInfoDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->btripHotelCancelPolicyInfoDTOList) {
            if (\is_array($this->btripHotelCancelPolicyInfoDTOList)) {
                $res['btrip_hotel_cancel_policy_info_d_t_o_list'] = [];
                $n1 = 0;
                foreach ($this->btripHotelCancelPolicyInfoDTOList as $item1) {
                    $res['btrip_hotel_cancel_policy_info_d_t_o_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['btrip_hotel_cancel_policy_info_d_t_o_list'])) {
            if (!empty($map['btrip_hotel_cancel_policy_info_d_t_o_list'])) {
                $model->btripHotelCancelPolicyInfoDTOList = [];
                $n1 = 0;
                foreach ($map['btrip_hotel_cancel_policy_info_d_t_o_list'] as $item1) {
                    $model->btripHotelCancelPolicyInfoDTOList[$n1] = btripHotelCancelPolicyInfoDTOList::fromMap($item1);
                    ++$n1;
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
