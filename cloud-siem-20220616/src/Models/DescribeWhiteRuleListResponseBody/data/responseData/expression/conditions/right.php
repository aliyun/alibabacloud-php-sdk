<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeWhiteRuleListResponseBody\data\responseData\expression\conditions;

use AlibabaCloud\Dara\Model;

class right extends Model
{
    /**
     * @var bool
     */
    public $isVar;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var mixed[]
     */
    public $modifierParam;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'isVar' => 'IsVar',
        'modifier' => 'Modifier',
        'modifierParam' => 'ModifierParam',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->modifierParam)) {
            Model::validateArray($this->modifierParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isVar) {
            $res['IsVar'] = $this->isVar;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->modifierParam) {
            if (\is_array($this->modifierParam)) {
                $res['ModifierParam'] = [];
                foreach ($this->modifierParam as $key1 => $value1) {
                    $res['ModifierParam'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['IsVar'])) {
            $model->isVar = $map['IsVar'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['ModifierParam'])) {
            if (!empty($map['ModifierParam'])) {
                $model->modifierParam = [];
                foreach ($map['ModifierParam'] as $key1 => $value1) {
                    $model->modifierParam[$key1] = $value1;
                }
            }
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
