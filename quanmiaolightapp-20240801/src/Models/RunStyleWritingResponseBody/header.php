<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingResponseBody;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @example 403
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example Pop sign mismatch, please check log.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example task-progress-start-generating
     *
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $eventInfo;

    /**
     * @example 0EB27AE3-CA53-5FAE-83C6-EE66CA4DF5DF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3cd10828-0e42-471c-8f1a-931cde20b035
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example d3be9981-ca2d-4e17-bf31-1c0a628e9f99
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 2150451a17191950923411783e2927
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'event' => 'event',
        'eventInfo' => 'eventInfo',
        'requestId' => 'requestId',
        'sessionId' => 'sessionId',
        'taskId' => 'taskId',
        'traceId' => 'traceId',
    ];

    public function validate() {}

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
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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
