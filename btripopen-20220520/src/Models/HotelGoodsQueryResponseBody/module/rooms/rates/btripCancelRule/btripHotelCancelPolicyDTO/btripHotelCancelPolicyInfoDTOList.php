<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms\rates\btripCancelRule\btripHotelCancelPolicyDTO;

use AlibabaCloud\Tea\Model;

class btripHotelCancelPolicyInfoDTOList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $hour;

    /**
     * @example 20
     *
     * @var int
     */
    public $value;
    protected $_name = [
        'hour'  => 'hour',
        'value' => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hour) {
            $res['hour'] = $this->hour;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return btripHotelCancelPolicyInfoDTOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hour'])) {
            $model->hour = $map['hour'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
