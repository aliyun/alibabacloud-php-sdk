<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content;

use AlibabaCloud\Tea\Model;

class text extends Model
{
    /**
     * @example 你好！
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'value' => 'value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return text
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
