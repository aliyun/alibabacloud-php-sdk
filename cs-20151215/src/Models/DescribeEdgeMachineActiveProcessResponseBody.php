<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeEdgeMachineActiveProcessResponseBody extends Model
{
    /**
     * @var string
     */
    public $logs;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $step;
    protected $_name = [
        'logs' => 'logs',
        'progress' => 'progress',
        'requestId' => 'request_id',
        'state' => 'state',
        'step' => 'step',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
