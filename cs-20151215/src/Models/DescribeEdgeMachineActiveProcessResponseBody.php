<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeEdgeMachineActiveProcessResponseBody extends Model
{
    /**
     * @description logs of activate
     *
     * @var string
     */
    public $logs;

    /**
     * @description process of activate
     *
     * @var int
     */
    public $progress;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description state of activate
     *
     * @var string
     */
    public $state;

    /**
     * @description step of activate
     *
     * @var string
     */
    public $step;
    protected $_name = [
        'logs'      => 'logs',
        'progress'  => 'progress',
        'requestId' => 'request_id',
        'state'     => 'state',
        'step'      => 'step',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logs) {
            $res['logs'] = $this->logs;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->step) {
            $res['step'] = $this->step;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEdgeMachineActiveProcessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logs'])) {
            $model->logs = $map['logs'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['step'])) {
            $model->step = $map['step'];
        }

        return $model;
    }
}
