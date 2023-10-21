<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutMonitorGroupDynamicRuleRequest\groupRules;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The method that is used to filter instances. Valid values of N: 1 to 3. Valid values:
     *
     *   contains: contains
     *   notContains: does not contain
     *   startWith: starts with a prefix
     *   endWith: ends with a suffix
     *
     * @example contains
     *
     * @var string
     */
    public $function;

    /**
     * @description The name of the field based on which instances are filtered. Valid values of N: 1 to 3.
     *
     * Only hostnames are supported. Example: hostName.
     * @example hostName
     *
     * @var string
     */
    public $name;

    /**
     * @description The value to be matched with the specified field. Valid values of N: 1 to 3.
     *
     * @example nginx
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
     * @return filters
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
