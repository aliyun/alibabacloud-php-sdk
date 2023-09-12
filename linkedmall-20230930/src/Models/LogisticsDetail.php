<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class LogisticsDetail extends Model
{
    /**
     * @example 2023-09-01 00:00:00
     *
     * @var string
     */
    public $ocurrTimeStr;

    /**
     * @example 已签收
     *
     * @var string
     */
    public $standerdDesc;
    protected $_name = [
        'ocurrTimeStr' => 'ocurrTimeStr',
        'standerdDesc' => 'standerdDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ocurrTimeStr) {
            $res['ocurrTimeStr'] = $this->ocurrTimeStr;
        }
        if (null !== $this->standerdDesc) {
            $res['standerdDesc'] = $this->standerdDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LogisticsDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ocurrTimeStr'])) {
            $model->ocurrTimeStr = $map['ocurrTimeStr'];
        }
        if (isset($map['standerdDesc'])) {
            $model->standerdDesc = $map['standerdDesc'];
        }

        return $model;
    }
}
