<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetWelcomeTextAndMusicResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example a7***83
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
    public $text;
    protected $_name = [
        'hotelId'  => 'HotelId',
        'musicUrl' => 'MusicUrl',
        'text'     => 'Text',
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
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
