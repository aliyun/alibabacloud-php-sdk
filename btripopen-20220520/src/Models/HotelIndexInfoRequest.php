<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class HotelIndexInfoRequest extends Model
{
    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var int
     */
    public $hotelStatus;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageToken;
    protected $_name = [
        'cityCode' => 'city_code',
        'hotelStatus' => 'hotel_status',
        'pageSize' => 'page_size',
        'pageToken' => 'page_token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
