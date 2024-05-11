<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class availableAssertions extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 200
     *
     * @var string
     */
    public $expect;

    /**
     * @description This parameter is required.
     *
     * @example eq
     *
     * @var string
     */
    public $operator;

    /**
     * @example key
     *
     * @var string
     */
    public $target;

    /**
     * @description This parameter is required.
     *
     * @example DnsARecord
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
