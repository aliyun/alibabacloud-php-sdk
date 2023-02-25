<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecSpecInfoResponseBody\specInfos;

use AlibabaCloud\Tea\Model;

class ruleConfigs extends Model
{
    /**
     * @description The configuration code of the security rule.
     *
     * @example custom_****_number
     *
     * @var string
     */
    public $code;

    /**
     * @description The configuration expression of the security rule.
     *
     * @example equal
     *
     * @var string
     */
    public $expr;

    /**
     * @description The value of the configuration expression of the security rule.
     *
     * @example 20
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'code'  => 'Code',
        'expr'  => 'Expr',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
     * @return ruleConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
