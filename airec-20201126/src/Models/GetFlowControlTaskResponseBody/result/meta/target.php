<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\GetFlowControlTaskResponseBody\result\meta;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @example EXPOSE_PERCENT
     *
     * @var string
     */
    public $type;

    /**
     * @example 20
     *
     * @var int
     */
    public $value;
    protected $_name = [
        'type'  => 'type',
        'value' => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
