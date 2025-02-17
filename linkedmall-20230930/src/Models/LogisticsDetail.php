<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class LogisticsDetail extends Model
{
    /**
     * @var string
     */
    public $ocurrTimeStr;
    /**
     * @var string
     */
    public $standerdDesc;
    protected $_name = [
        'ocurrTimeStr' => 'ocurrTimeStr',
        'standerdDesc' => 'standerdDesc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
