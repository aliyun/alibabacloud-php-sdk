<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
        'failure'                     => 'failure',
        'running'                     => 'running',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentSessionClusterStatus) {
            $res['currentSessionClusterStatus'] = $this->currentSessionClusterStatus;
        }
        if (null !== $this->failure) {
            $res['failure'] = null !== $this->failure ? $this->failure->toMap() : null;
        }
        if (null !== $this->running) {
            $res['running'] = null !== $this->running ? $this->running->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SessionClusterStatus
     */
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
