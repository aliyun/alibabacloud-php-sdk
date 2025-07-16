<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListMessageResponseBody\messages\content;

use AlibabaCloud\Tea\Model;

class markdown extends Model
{
    /**
     * @example 1. markdown内容
     * 2. markdown内容
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
     * @return markdown
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
