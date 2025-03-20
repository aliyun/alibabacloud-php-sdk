<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks\outputs;

use AlibabaCloud\Tea\Model;

class variables extends Model
{
    /**
     * @description The name of the variable.
     *
     * @example key1
     *
     * @var string
     */
    public $name;

    /**
     * @description The type. Valid values:
     *
     *   Constant: constant
     *   PassThrough: node output
     *   System: variable
     *   NodeOutput: script output
     *
     * This parameter is required.
     *
     * @example Constant
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the variable.
     *
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name' => 'Name',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return variables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
