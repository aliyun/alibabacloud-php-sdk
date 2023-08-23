<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class RemoveHotelRequest extends Model
{
    /**
     * @description appkey
     *
     * @example 30193305
     *
     * @var string
     */
    public $appKey;

    /**
     * @example e6dd44fd16084db8a60d69fd625d9f0f
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example AAEVK***UE3d3Z2ETwh
     *
     * @var string
     */
    public $tbOpenId;
    protected $_name = [
        'appKey'   => 'AppKey',
        'hotelId'  => 'HotelId',
        'tbOpenId' => 'TbOpenId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->tbOpenId) {
            $res['TbOpenId'] = $this->tbOpenId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveHotelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['TbOpenId'])) {
            $model->tbOpenId = $map['TbOpenId'];
        }

        return $model;
    }
}
