<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class AddOrUpdateWelcomeTextRequest extends Model
{
    /**
     * @example af7***536
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example http://ailabsaicloudservice.alicdn.com/tmp/a.wav
     *
     * @var string
     */
    public $musicUrl;

    /**
     * @var string
     */
    public $welcomeText;
    protected $_name = [
        'hotelId'     => 'HotelId',
        'musicUrl'    => 'MusicUrl',
        'welcomeText' => 'WelcomeText',
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
        if (null !== $this->musicUrl) {
            $res['MusicUrl'] = $this->musicUrl;
        }
        if (null !== $this->welcomeText) {
            $res['WelcomeText'] = $this->welcomeText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddOrUpdateWelcomeTextRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['MusicUrl'])) {
            $model->musicUrl = $map['MusicUrl'];
        }
        if (isset($map['WelcomeText'])) {
            $model->welcomeText = $map['WelcomeText'];
        }

        return $model;
    }
}
