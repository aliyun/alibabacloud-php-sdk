<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateRouteRuleRequest\routeChildRules;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description 字段
     *
     * @var string
     */
    public $key;

    /**
     * @description 字段取值
     *
     * @var string
     */
    public $value;

    /**
     * @description 操作符
     *
     * @var string
     */
    public $operationSymbol;
    protected $_name = [
        'key'             => 'key',
        'value'           => 'value',
        'operationSymbol' => 'operationSymbol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->operationSymbol) {
            $res['operationSymbol'] = $this->operationSymbol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['operationSymbol'])) {
            $model->operationSymbol = $map['operationSymbol'];
        }

        return $model;
    }
}
