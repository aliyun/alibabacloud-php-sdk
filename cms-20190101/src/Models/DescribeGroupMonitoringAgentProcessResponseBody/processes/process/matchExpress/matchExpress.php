<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process\matchExpress;

use AlibabaCloud\Tea\Model;

class matchExpress extends Model
{
    /**
     * @description The matching condition. Valid values:
     *
     *   all (default): matches all
     *   startWith: starts with a prefix
     *   endWith: ends with a suffix
     *   contains: contains
     *   notContains: excludes
     *   equals: equals
     *
     * >  The matched instances are monitored by the process monitoring task.
     * @example all
     *
     * @var string
     */
    public $function;

    /**
     * @description The criteria based on which the instances are matched.
     *
     * >  Set the value to `name`. The value name indicates that the instances are matched based on the instance name.
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The keyword used to match the instance name.
     *
     * @example portalHost
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
