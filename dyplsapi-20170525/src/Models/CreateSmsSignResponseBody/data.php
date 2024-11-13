<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreateSmsSignResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 短信接收者号码签名串(加到短信内容中供解析真实被叫号码)
     *
     * @example sign23343466
     *
     * @var string
     */
    public $calledNoSign;
    protected $_name = [
        'calledNoSign' => 'CalledNoSign',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNoSign) {
            $res['CalledNoSign'] = $this->calledNoSign;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNoSign'])) {
            $model->calledNoSign = $map['CalledNoSign'];
        }

        return $model;
    }
}
