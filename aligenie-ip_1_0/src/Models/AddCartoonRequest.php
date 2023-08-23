<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class AddCartoonRequest extends Model
{
    /**
     * @example 520a0***eb
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example 40c804***697
     *
     * @var string
     */
    public $startVideoMd5;

    /**
     * @example https://***.mp4
     *
     * @var string
     */
    public $startVideoUrl;
    protected $_name = [
        'hotelId'       => 'HotelId',
        'startVideoMd5' => 'StartVideoMd5',
        'startVideoUrl' => 'StartVideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->startVideoMd5) {
            $res['StartVideoMd5'] = $this->startVideoMd5;
        }
        if (null !== $this->startVideoUrl) {
            $res['StartVideoUrl'] = $this->startVideoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCartoonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['StartVideoMd5'])) {
            $model->startVideoMd5 = $map['StartVideoMd5'];
        }
        if (isset($map['StartVideoUrl'])) {
            $model->startVideoUrl = $map['StartVideoUrl'];
        }

        return $model;
    }
}
