<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordRequest;

use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordRequest\params\args;
use AlibabaCloud\Tea\Model;

class params extends Model
{
    /**
     * @var args
     */
    public $args;

    /**
     * @description This parameter is required.
     *
     * @example mullprof
     *
     * @var string
     */
    public $functionName;

    /**
     * @example i-2zei55fwj8nnu31h3z46
     *
     * @var string
     */
    public $instance;

    /**
     * @example restart
     *
     * @var string
     */
    public $op;

    /**
     * @var string
     */
    public $region;

    /**
     * @example 1664516888213680
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'args' => 'args',
        'functionName' => 'function_name',
        'instance' => 'instance',
        'op' => 'op',
        'region' => 'region',
        'uid' => 'uid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['args'] = null !== $this->args ? $this->args->toMap() : null;
        }
        if (null !== $this->functionName) {
            $res['function_name'] = $this->functionName;
        }
        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }
        if (null !== $this->op) {
            $res['op'] = $this->op;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return params
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['args'])) {
            $model->args = args::fromMap($map['args']);
        }
        if (isset($map['function_name'])) {
            $model->functionName = $map['function_name'];
        }
        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }
        if (isset($map['op'])) {
            $model->op = $map['op'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
