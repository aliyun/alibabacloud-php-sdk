<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafSpecInfoResponseBody\specInfos;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description The configuration code of the protection rule.
     *
     * @example enable
     *
     * @var string
     */
    public $config;

    /**
     * @description The configuration expression of the protection rule.
     *
     * @example equal
     *
     * @var string
     */
    public $expr;

    /**
     * @description The value of the configuration expression of the protection rule.
     *
     * @example on
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'config' => 'Config',
        'expr'   => 'Expr',
        'value'  => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->expr) {
            $res['Expr'] = $this->expr;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Expr'])) {
            $model->expr = $map['Expr'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
