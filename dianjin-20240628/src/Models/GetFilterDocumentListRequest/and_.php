<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetFilterDocumentListRequest;

use AlibabaCloud\Tea\Model;

class and_ extends Model
{
    /**
     * @example 1
     *
     * @var float
     */
    public $boost;

    /**
     * @example company
     *
     * @var string
     */
    public $key;

    /**
     * @example eq
     *
     * @var string
     */
    public $operator;

    /**
     * @example alibaba
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'boost'    => 'boost',
        'key'      => 'key',
        'operator' => 'operator',
        'value'    => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boost) {
            $res['boost'] = $this->boost;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return and_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['boost'])) {
            $model->boost = $map['boost'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
