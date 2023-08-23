<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateScreenSaverRequest;

use AlibabaCloud\Tea\Model;

class hotelScreenSaver extends Model
{
    /**
     * @example xxx.png
     *
     * @var string
     */
    public $screenSaverPicUrl;

    /**
     * @example common-weather
     *
     * @var string
     */
    public $screenSaverStyle;
    protected $_name = [
        'screenSaverPicUrl' => 'ScreenSaverPicUrl',
        'screenSaverStyle'  => 'ScreenSaverStyle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->screenSaverPicUrl) {
            $res['ScreenSaverPicUrl'] = $this->screenSaverPicUrl;
        }
        if (null !== $this->screenSaverStyle) {
            $res['ScreenSaverStyle'] = $this->screenSaverStyle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotelScreenSaver
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScreenSaverPicUrl'])) {
            $model->screenSaverPicUrl = $map['ScreenSaverPicUrl'];
        }
        if (isset($map['ScreenSaverStyle'])) {
            $model->screenSaverStyle = $map['ScreenSaverStyle'];
        }

        return $model;
    }
}
