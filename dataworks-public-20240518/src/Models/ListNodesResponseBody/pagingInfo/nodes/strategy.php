<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes;

use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @description The instance generation mode. Valid values:
     *
     *   T+1
     *   Immediately
     *
     * @example T+1
     *
     * @var string
     */
    public $instanceMode;

    /**
     * @description The rerun interval. Unit: milliseconds.
     *
     * @example 180000
     *
     * @var int
     */
    public $rerunInterval;

    /**
     * @description The rerun mode. Valid values:
     *
     *   Allowed
     *   Denied
     *   FailureAllowed
     *
     * @example Allowed
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @description The number of reruns.
     *
     * @example 3
     *
     * @var int
     */
    public $rerunTimes;

    /**
     * @description The timeout period.
     *
     * @example 0
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'instanceMode' => 'InstanceMode',
        'rerunInterval' => 'RerunInterval',
        'rerunMode' => 'RerunMode',
        'rerunTimes' => 'RerunTimes',
        'timeout' => 'Timeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceMode) {
            $res['InstanceMode'] = $this->instanceMode;
        }
        if (null !== $this->rerunInterval) {
            $res['RerunInterval'] = $this->rerunInterval;
        }
        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }
        if (null !== $this->rerunTimes) {
            $res['RerunTimes'] = $this->rerunTimes;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceMode'])) {
            $model->instanceMode = $map['InstanceMode'];
        }
        if (isset($map['RerunInterval'])) {
            $model->rerunInterval = $map['RerunInterval'];
        }
        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }
        if (isset($map['RerunTimes'])) {
            $model->rerunTimes = $map['RerunTimes'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
