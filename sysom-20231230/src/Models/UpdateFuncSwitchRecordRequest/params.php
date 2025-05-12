<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordRequest\params\args;

class params extends Model
{
    /**
     * @var args
     */
    public $args;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $op;

    /**
     * @var string
     */
    public $region;

    /**
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

    public function validate()
    {
        if (null !== $this->args) {
            $this->args->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            $res['args'] = null !== $this->args ? $this->args->toArray($noStream) : $this->args;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
