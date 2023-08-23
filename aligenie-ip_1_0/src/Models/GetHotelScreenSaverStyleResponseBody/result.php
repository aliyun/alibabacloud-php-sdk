<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelScreenSaverStyleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $cnName;

    /**
     * @example common-weather
     *
     * @var string
     */
    public $code;

    /**
     * @example common-weather
     *
     * @var string
     */
    public $enName;

    /**
     * @example https://img.***.png
     *
     * @var string
     */
    public $picUrl;
    protected $_name = [
        'cnName' => 'CnName',
        'code'   => 'Code',
        'enName' => 'EnName',
        'picUrl' => 'PicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnName) {
            $res['CnName'] = $this->cnName;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
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
        if (isset($map['CnName'])) {
            $model->cnName = $map['CnName'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }

        return $model;
    }
}
