<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetServiceFuncStatusRequest;

use AlibabaCloud\Tea\Model;

class params extends Model
{
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
     * @example 1338904783509062
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'functionName' => 'function_name',
        'instance' => 'instance',
        'uid' => 'uid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['function_name'] = $this->functionName;
        }
        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
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
        if (isset($map['function_name'])) {
            $model->functionName = $map['function_name'];
        }
        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
