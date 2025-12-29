<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AddOrUpdateScreenSaverRequest;

use AlibabaCloud\Dara\Model;

class hotelScreenSaver extends Model
{
    /**
     * @var string
     */
    public $screenSaverPicUrl;

    /**
     * @var string
     */
    public $screenSaverStyle;
    protected $_name = [
        'screenSaverPicUrl' => 'ScreenSaverPicUrl',
        'screenSaverStyle' => 'ScreenSaverStyle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
