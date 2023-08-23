<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelHomeBackImageAndModesResponseBody\result;

use AlibabaCloud\Tea\Model;

class modeList extends Model
{
    /**
     * @example 浪漫模式
     *
     * @var string
     */
    public $cnName;

    /**
     * @example romantic
     *
     * @var string
     */
    public $code;

    /**
     * @example https://ailabsaicloudservice.alicdn.com/hotel/icon/changjingmoshi/langman.png
     *
     * @var string
     */
    public $icon;
    protected $_name = [
        'cnName' => 'CnName',
        'code'   => 'Code',
        'icon'   => 'Icon',
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
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modeList
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
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        return $model;
    }
}
