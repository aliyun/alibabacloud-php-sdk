<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormListInAppResponseBody\data;

use AlibabaCloud\Dara\Model;

class title extends Model
{
    /**
     * @var string
     */
    public $enUS;

    /**
     * @var string
     */
    public $zhCN;
    protected $_name = [
        'enUS' => 'EnUS',
        'zhCN' => 'ZhCN',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enUS) {
            $res['EnUS'] = $this->enUS;
        }

        if (null !== $this->zhCN) {
            $res['ZhCN'] = $this->zhCN;
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
        if (isset($map['EnUS'])) {
            $model->enUS = $map['EnUS'];
        }

        if (isset($map['ZhCN'])) {
            $model->zhCN = $map['ZhCN'];
        }

        return $model;
    }
}
