<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListActivityGameInfoResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example ""
     *
     * @var string
     */
    public $gameShowInfo;
    protected $_name = [
        'extInfo'      => 'ExtInfo',
        'gameShowInfo' => 'GameShowInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->gameShowInfo) {
            $res['GameShowInfo'] = $this->gameShowInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['GameShowInfo'])) {
            $model->gameShowInfo = $map['GameShowInfo'];
        }

        return $model;
    }
}
