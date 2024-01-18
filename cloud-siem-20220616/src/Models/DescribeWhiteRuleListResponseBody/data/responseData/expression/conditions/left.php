<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data\responseData\expression\conditions;

use AlibabaCloud\Tea\Model;

class left extends Model
{
    /**
     * @description Indicates whether the left operand is a variable. Valid values:
     *
     *   true: variable
     *   false: constant
     *
     * @example true
     *
     * @var bool
     */
    public $isVar;

    /**
     * @description The remarks on the left operand.
     *
     * @example length
     *
     * @var string
     */
    public $modifier;

    /**
     * @description The key-value pair information of the remarks.
     *
     * @var mixed[]
     */
    public $modifierParam;

    /**
     * @description Indicates whether the left operand is a constant. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var string
     */
    public $type;

    /**
     * @description The variable of the left operand.
     *
     * @example ip
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'isVar'         => 'IsVar',
        'modifier'      => 'Modifier',
        'modifierParam' => 'ModifierParam',
        'type'          => 'Type',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isVar) {
            $res['IsVar'] = $this->isVar;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->modifierParam) {
            $res['ModifierParam'] = $this->modifierParam;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return left
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsVar'])) {
            $model->isVar = $map['IsVar'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['ModifierParam'])) {
            $model->modifierParam = $map['ModifierParam'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
