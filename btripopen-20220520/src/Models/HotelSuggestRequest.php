<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelSuggestRequest extends Model
{
    /**
     * @example 23141
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @example 2024-06-19
     *
     * @var string
     */
    public $checkIn;

    /**
     * @example 2024-10-30
     *
     * @var string
     */
    public $checkOut;

    /**
     * @example 330100
     *
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $searchType;
    protected $_name = [
        'btripUserId' => 'btrip_user_id',
        'checkIn'     => 'check_in',
        'checkOut'    => 'check_out',
        'cityCode'    => 'city_code',
        'keyword'     => 'keyword',
        'searchType'  => 'search_type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }
        if (null !== $this->searchType) {
            $res['search_type'] = $this->searchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelSuggestRequest
     */
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
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }
        if (isset($map['search_type'])) {
            $model->searchType = $map['search_type'];
        }

        return $model;
    }
}
