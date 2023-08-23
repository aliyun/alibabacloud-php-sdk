<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ChildAccountAuthRequest extends Model
{
    /**
     * @example lee
     *
     * @var string
     */
    public $account;

    /**
     * @example 30471753
     *
     * @var string
     */
    public $appKey;

    /**
     * @example a7***83
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example AAEV***E3d3Z2ETwh
     *
     * @var string
     */
    public $tbOpenId;
    protected $_name = [
        'account'  => 'Account',
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
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
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
     * @return ChildAccountAuthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
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
