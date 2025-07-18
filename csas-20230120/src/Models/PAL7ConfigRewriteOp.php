<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class PAL7ConfigRewriteOp extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $oldValue;

    /**
     * @example add,set,delete,replace
     *
     * @var string
     */
    public $op;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueVariable;
    protected $_name = [
        'key' => 'Key',
        'oldValue' => 'OldValue',
        'op' => 'Op',
        'value' => 'Value',
        'valueVariable' => 'ValueVariable',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->op) {
            $res['Op'] = $this->op;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueVariable) {
            $res['ValueVariable'] = $this->valueVariable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PAL7ConfigRewriteOp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['Op'])) {
            $model->op = $map['Op'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueVariable'])) {
            $model->valueVariable = $map['ValueVariable'];
        }

        return $model;
    }
}
