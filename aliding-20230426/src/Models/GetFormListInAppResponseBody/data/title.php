<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetFormListInAppResponseBody\data;

use AlibabaCloud\Tea\Model;

class title extends Model
{
    /**
     * @example form
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return title
     */
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
