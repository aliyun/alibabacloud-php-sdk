<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class DeviceGroupDynamicRule extends Model
{
    /**
     * @var mixed
     */
    public $args;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $operator;
    protected $_name = [
        'args' => 'Args',
        'key' => 'Key',
        'operator' => 'Operator',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
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
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        return $model;
    }
}
