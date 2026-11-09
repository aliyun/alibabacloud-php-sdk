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
    public $harnessVersion;

    /**
     * @var string
     */
    public $lastActiveAt;

    /**
     * @var string
     */
    public $lastHeartbeatAt;

    /**
     * @var string
     */
    public $lastRebuildOperationId;

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

    /**
     * @var bool
     */
    public $updateAvailable;

    /**
     * @var bool
     */
    public $updateFailed;
    protected $_name = [
        'activeSessionCount' => 'activeSessionCount',
        'createdAt' => 'createdAt',
        'harnessVersion' => 'harnessVersion',
        'lastActiveAt' => 'lastActiveAt',
        'lastHeartbeatAt' => 'lastHeartbeatAt',
        'lastRebuildOperationId' => 'lastRebuildOperationId',
        'maxConcurrentSessions' => 'maxConcurrentSessions',
        'phase' => 'phase',
        'sandboxId' => 'sandboxId',
        'updateAvailable' => 'updateAvailable',
        'updateFailed' => 'updateFailed',
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

        if (null !== $this->harnessVersion) {
            $res['harnessVersion'] = $this->harnessVersion;
        }

        if (null !== $this->lastActiveAt) {
            $res['lastActiveAt'] = $this->lastActiveAt;
        }

        if (null !== $this->lastHeartbeatAt) {
            $res['lastHeartbeatAt'] = $this->lastHeartbeatAt;
        }

        if (null !== $this->lastRebuildOperationId) {
            $res['lastRebuildOperationId'] = $this->lastRebuildOperationId;
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

        if (null !== $this->updateAvailable) {
            $res['updateAvailable'] = $this->updateAvailable;
        }

        if (null !== $this->updateFailed) {
            $res['updateFailed'] = $this->updateFailed;
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

        if (isset($map['harnessVersion'])) {
            $model->harnessVersion = $map['harnessVersion'];
        }

        if (isset($map['lastActiveAt'])) {
            $model->lastActiveAt = $map['lastActiveAt'];
        }

        if (isset($map['lastHeartbeatAt'])) {
            $model->lastHeartbeatAt = $map['lastHeartbeatAt'];
        }

        if (isset($map['lastRebuildOperationId'])) {
            $model->lastRebuildOperationId = $map['lastRebuildOperationId'];
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

        if (isset($map['updateAvailable'])) {
            $model->updateAvailable = $map['updateAvailable'];
        }

        if (isset($map['updateFailed'])) {
            $model->updateFailed = $map['updateFailed'];
        }

        return $model;
    }
}
