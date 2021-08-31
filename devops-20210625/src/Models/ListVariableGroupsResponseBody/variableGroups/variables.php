<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListVariableGroupsResponseBody\variableGroups;

use AlibabaCloud\Tea\Model;

class variables extends Model
{
    /**
     * @description 变量值
     *
     * @var string
     */
    public $value;

    /**
     * @description 变量名
     *
     * @var string
     */
    public $name;

    /**
     * @description 是否加密
     *
     * @var bool
     */
    public $isEncrypted;
    protected $_name = [
        'value'       => 'value',
        'name'        => 'name',
        'isEncrypted' => 'isEncrypted',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->isEncrypted) {
            $res['isEncrypted'] = $this->isEncrypted;
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
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['isEncrypted'])) {
            $model->isEncrypted = $map['isEncrypted'];
        }

        return $model;
    }
}
