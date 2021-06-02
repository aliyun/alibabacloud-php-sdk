<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class IsEnableOssRequest extends Model
{
    /**
     * @description 是否启用
     *
     * @var bool
     */
    public $isEnable;
    protected $_name = [
        'isEnable' => 'IsEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsEnableOssRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }

        return $model;
    }
}
