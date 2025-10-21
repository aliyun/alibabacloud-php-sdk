<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SessionClusterStatus extends Model
{
    /**
     * @var string
     */
    public $currentSessionClusterStatus;

    /**
     * @var SessionClusterFailureInfo
     */
    public $failure;

    /**
     * @var SessionClusterRunningInfo
     */
    public $running;
    protected $_name = [
        'currentSessionClusterStatus' => 'currentSessionClusterStatus',
        'failure' => 'failure',
        'running' => 'running',
    ];

    public function validate()
    {
        if (null !== $this->failure) {
            $this->failure->validate();
        }
        if (null !== $this->running) {
            $this->running->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentSessionClusterStatus) {
            $res['currentSessionClusterStatus'] = $this->currentSessionClusterStatus;
        }

        if (null !== $this->failure) {
            $res['failure'] = null !== $this->failure ? $this->failure->toArray($noStream) : $this->failure;
        }

        if (null !== $this->running) {
            $res['running'] = null !== $this->running ? $this->running->toArray($noStream) : $this->running;
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
        if (isset($map['currentSessionClusterStatus'])) {
            $model->currentSessionClusterStatus = $map['currentSessionClusterStatus'];
        }

        if (isset($map['failure'])) {
            $model->failure = SessionClusterFailureInfo::fromMap($map['failure']);
        }

        if (isset($map['running'])) {
            $model->running = SessionClusterRunningInfo::fromMap($map['running']);
        }

        return $model;
    }
}
