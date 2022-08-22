<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $picUrl;

    /**
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
