<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetRayClusterResponseBody;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var int
     */
    public $containerExitCode;

    /**
     * @var string
     */
    public $containerState;

    /**
     * @var string
     */
    public $containerStateMessage;

    /**
     * @var string
     */
    public $containerStateReason;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'containerExitCode' => 'containerExitCode',
        'containerState' => 'containerState',
        'containerStateMessage' => 'containerStateMessage',
        'containerStateReason' => 'containerStateReason',
        'createTime' => 'createTime',
        'instanceId' => 'instanceId',
        'message' => 'message',
        'phase' => 'phase',
        'reason' => 'reason',
        'startTime' => 'startTime',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerExitCode) {
            $res['containerExitCode'] = $this->containerExitCode;
        }

        if (null !== $this->containerState) {
            $res['containerState'] = $this->containerState;
        }

        if (null !== $this->containerStateMessage) {
            $res['containerStateMessage'] = $this->containerStateMessage;
        }

        if (null !== $this->containerStateReason) {
            $res['containerStateReason'] = $this->containerStateReason;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['containerExitCode'])) {
            $model->containerExitCode = $map['containerExitCode'];
        }

        if (isset($map['containerState'])) {
            $model->containerState = $map['containerState'];
        }

        if (isset($map['containerStateMessage'])) {
            $model->containerStateMessage = $map['containerStateMessage'];
        }

        if (isset($map['containerStateReason'])) {
            $model->containerStateReason = $map['containerStateReason'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
