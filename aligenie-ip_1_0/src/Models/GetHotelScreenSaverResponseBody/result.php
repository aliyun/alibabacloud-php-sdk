<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example https://ailabs.alibabausercontent.com/platform/3d4fe6d66ec49d9789635f66627f0339/welcome_audios/976210a6532150f49c2677a8b7dbc105/l6fspbhd.jpg
     *
     * @var string
     */
    public $picUrl;

    /**
     * @example common-weather
     *
     * @var string
     */
    public $styleCode;
    protected $_name = [
        'picUrl'    => 'PicUrl',
        'styleCode' => 'StyleCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->styleCode) {
            $res['StyleCode'] = $this->styleCode;
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
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['StyleCode'])) {
            $model->styleCode = $map['StyleCode'];
        }

        return $model;
    }
}
