<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class HotelIndexInfoRequest extends Model
{
    /**
     * @example 330000
     *
     * @var string
     */
    public $cityCode;

    /**
     * @example 0
     *
     * @var int
     */
    public $hotelStatus;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1038882
     *
     * @var string
     */
    public $pageToken;
    protected $_name = [
        'cityCode'    => 'city_code',
        'hotelStatus' => 'hotel_status',
        'pageSize'    => 'page_size',
        'pageToken'   => 'page_token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->hotelStatus) {
            $res['hotel_status'] = $this->hotelStatus;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageToken) {
            $res['page_token'] = $this->pageToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotelIndexInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['hotel_status'])) {
            $model->hotelStatus = $map['hotel_status'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['page_token'])) {
            $model->pageToken = $map['page_token'];
        }

        return $model;
    }
}
