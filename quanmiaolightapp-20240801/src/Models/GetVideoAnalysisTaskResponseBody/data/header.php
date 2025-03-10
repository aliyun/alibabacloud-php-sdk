<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example Deduct task already success,Please do not resubmit.token \\"369e8f2c-d283-424a-96c4-c83efe08c89e\\"
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example TIMEOUT_CLOSE_ORDER
     *
     * @var string
     */
    public $event;

    /**
     * @example xxx
     *
     * @var string
     */
    public $eventInfo;

    /**
     * @example d5c38cf6-a4bf-4a57-a697-9f449926f0c9
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 6e223291-729b-4e84-9271-c13ada1a776b
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 215045f817272303448235204efdef
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'event'        => 'event',
        'eventInfo'    => 'eventInfo',
        'sessionId'    => 'sessionId',
        'taskId'       => 'taskId',
        'traceId'      => 'traceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->event) {
            $res['event'] = $this->event;
        }
        if (null !== $this->eventInfo) {
            $res['eventInfo'] = $this->eventInfo;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return header
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['event'])) {
            $model->event = $map['event'];
        }
        if (isset($map['eventInfo'])) {
            $model->eventInfo = $map['eventInfo'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        return $model;
    }
}
