<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amp\V20220221\Models;

use AlibabaCloud\Tea\Model;

class TestStruct extends Model
{
    /**
     * @description 允许的HTTP方法列表
     *
     * @var string[]
     */
    public $methods;
    protected $_name = [
        'methods' => 'methods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->methods) {
            $res['methods'] = $this->methods;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestStruct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = $map['methods'];
            }
        }

        return $model;
    }
}
