<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSandboxesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $activeSessionCount;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $lastActiveAt;

    /**
     * @var string
     */
    public $lastHeartbeatAt;

    /**
     * @var int
     */
    public $maxConcurrentSessions;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $sandboxId;
    protected $_name = [
        'activeSessionCount' => 'activeSessionCount',
        'createdAt' => 'createdAt',
        'lastActiveAt' => 'lastActiveAt',
        'lastHeartbeatAt' => 'lastHeartbeatAt',
        'maxConcurrentSessions' => 'maxConcurrentSessions',
        'phase' => 'phase',
        'sandboxId' => 'sandboxId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeSessionCount) {
            $res['activeSessionCount'] = $this->activeSessionCount;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->lastActiveAt) {
            $res['lastActiveAt'] = $this->lastActiveAt;
        }

        if (null !== $this->lastHeartbeatAt) {
            $res['lastHeartbeatAt'] = $this->lastHeartbeatAt;
        }

        if (null !== $this->maxConcurrentSessions) {
            $res['maxConcurrentSessions'] = $this->maxConcurrentSessions;
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        if (null !== $this->sandboxId) {
            $res['sandboxId'] = $this->sandboxId;
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
        if (isset($map['activeSessionCount'])) {
            $model->activeSessionCount = $map['activeSessionCount'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['lastActiveAt'])) {
            $model->lastActiveAt = $map['lastActiveAt'];
        }

        if (isset($map['lastHeartbeatAt'])) {
            $model->lastHeartbeatAt = $map['lastHeartbeatAt'];
        }

        if (isset($map['maxConcurrentSessions'])) {
            $model->maxConcurrentSessions = $map['maxConcurrentSessions'];
        }

        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        if (isset($map['sandboxId'])) {
            $model->sandboxId = $map['sandboxId'];
        }

        return $model;
    }
}
