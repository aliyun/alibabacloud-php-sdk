<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class availableAssertions extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $expect;

    /**
     * @example eq
     *
     * @var string
     */
    public $operator;

    /**
     * @example HttpResponseTime
     *
     * @var string
     */
    public $target;

    /**
     * @example TraceRouteHops
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'expect'   => 'Expect',
        'operator' => 'Operator',
        'target'   => 'Target',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expect) {
            $res['Expect'] = $this->expect;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableAssertions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expect'])) {
            $model->expect = $map['Expect'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
