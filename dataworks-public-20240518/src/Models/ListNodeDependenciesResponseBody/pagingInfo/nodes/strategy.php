<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes;

use AlibabaCloud\Dara\Model;

class strategy extends Model
{
    /**
     * @var string
     */
    public $instanceMode;

    /**
     * @var int
     */
    public $rerunInterval;

    /**
     * @var string
     */
    public $rerunMode;

    /**
     * @var int
     */
    public $rerunTimes;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
