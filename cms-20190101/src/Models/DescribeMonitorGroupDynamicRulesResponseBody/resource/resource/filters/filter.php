<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponseBody\resource\resource\filters;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The method that is used to filter the instances. Valid values:
     *
     *   contains: includes a specified element
     *   startWith: specifies a prefix
     *   endWith: specifies a suffix
     *
     * @example contains
     *
     * @var string
     */
    public $function;

    /**
     * @description The name of the instance.
     *
     * @example hostName
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the dynamic rule.
     *
     * @example 1
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
     * @return filter
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
