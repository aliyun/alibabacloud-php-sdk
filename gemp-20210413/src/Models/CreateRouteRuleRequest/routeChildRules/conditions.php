<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateRouteRuleRequest\routeChildRules;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example payload.summary
     *
     * @var string
     */
    public $key;

    /**
     * @description This parameter is required.
     *
     * @example equals
     *
     * @var string
     */
    public $operationSymbol;

    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'             => 'key',
        'operationSymbol' => 'operationSymbol',
        'value'           => 'value',
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
        if (null !== $this->operationSymbol) {
            $res['operationSymbol'] = $this->operationSymbol;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['operationSymbol'])) {
            $model->operationSymbol = $map['operationSymbol'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
