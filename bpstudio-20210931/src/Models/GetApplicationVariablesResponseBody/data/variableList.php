<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariablesResponseBody\data;

use AlibabaCloud\Tea\Model;

class variableList extends Model
{
    /**
     * @example ecs.c6.4xlarge
     *
     * @var string
     */
    public $value;

    /**
     * @example ${instance_type}
     *
     * @var string
     */
    public $variable;
    protected $_name = [
        'value'    => 'Value',
        'variable' => 'Variable',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return variableList
     */
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
