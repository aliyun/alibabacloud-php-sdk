<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSecSpecInfoResponseBody\specInfos;

use AlibabaCloud\Dara\Model;

class ruleConfigs extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $expr;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'code' => 'Code',
        'expr' => 'Expr',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
