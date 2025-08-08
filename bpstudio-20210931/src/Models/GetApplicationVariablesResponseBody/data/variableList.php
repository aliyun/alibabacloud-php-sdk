<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariablesResponseBody\data;

use AlibabaCloud\Dara\Model;

class variableList extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $variable;
    protected $_name = [
        'value' => 'Value',
        'variable' => 'Variable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->variable) {
            $res['Variable'] = $this->variable;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['Variable'])) {
            $model->variable = $map['Variable'];
        }

        return $model;
    }
}
