<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody\taskList;

use AlibabaCloud\Tea\Model;

class matchExpress extends Model
{
    /**
     * @description The method that is used to match the instance name. Valid values:
     *
     *   startWith: starts with a prefix
     *   endWith: ends with a suffix
     *   all: matches all
     *   equals: equals
     *   contains: contains
     *   notContains: does not contain
     *
     * @example all
     *
     * @var string
     */
    public $function;

    /**
     * @description The instance name.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The keyword that corresponds to the instance name.
     *
     * @example ECS_instance1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'function' => 'Function',
        'name'     => 'Name',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchExpress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
