<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data\responseData\expression\conditions;

use AlibabaCloud\Tea\Model;

class right extends Model
{
    /**
     * @description Indicates whether the right operand is a constant or a runtime variable that is obtained from the runtime context. Valid values:
     *
     *   true: runtime variable
     *   false: constant
     *
     * @example false
     *
     * @var bool
     */
    public $isVar;

    /**
     * @description The remarks on the right operand.
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
     * @description The data type of the right operand.
     *
     * @example String
     *
     * @var string
     */
    public $type;

    /**
     * @description The right operand.
     *
     * @example 12345
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
     * @return right
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
