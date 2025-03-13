<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponseBody\variableGroup;

use AlibabaCloud\Tea\Model;

class variables extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isEncrypted;

    /**
     * @example name1
     *
     * @var string
     */
    public $name;

    /**
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'isEncrypted' => 'isEncrypted',
        'name'        => 'name',
        'value'       => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isEncrypted) {
            $res['isEncrypted'] = $this->isEncrypted;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isEncrypted'])) {
            $model->isEncrypted = $map['isEncrypted'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
