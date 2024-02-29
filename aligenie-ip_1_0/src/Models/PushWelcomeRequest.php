<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class PushWelcomeRequest extends Model
{
    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example 1211
     *
     * @var string
     */
    public $roomNo;

    /**
     * @example http://ailabsaicloudservice.alicdn.com/tmp/a.wav
     *
     * @var string
     */
    public $welcomeMusicUrl;

    /**
     * @var string
     */
    public $welcomeText;
    protected $_name = [
        'hotelId'         => 'HotelId',
        'roomNo'          => 'RoomNo',
        'welcomeMusicUrl' => 'WelcomeMusicUrl',
        'welcomeText'     => 'WelcomeText',
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
        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }
        if (null !== $this->welcomeMusicUrl) {
            $res['WelcomeMusicUrl'] = $this->welcomeMusicUrl;
        }
        if (null !== $this->welcomeText) {
            $res['WelcomeText'] = $this->welcomeText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushWelcomeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }
        if (isset($map['WelcomeMusicUrl'])) {
            $model->welcomeMusicUrl = $map['WelcomeMusicUrl'];
        }
        if (isset($map['WelcomeText'])) {
            $model->welcomeText = $map['WelcomeText'];
        }

        return $model;
    }
}
