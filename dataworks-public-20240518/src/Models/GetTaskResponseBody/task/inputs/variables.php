<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\inputs;

use AlibabaCloud\Tea\Model;

class variables extends Model
{
    /**
     * @example key1
     *
     * @var string
     */
    public $name;

    /**
     * @example TaskContext
     *
     * @var string
     */
    public $scope;

    /**
     * @example Constant
     *
     * @var string
     */
    public $type;

    /**
     * @example Value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'scope' => 'Scope',
        'type'  => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
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
