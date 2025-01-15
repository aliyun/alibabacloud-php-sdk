<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunScriptRefineResponseBody;

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
     * @example result-generated
     *
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $eventInfo;

    /**
     * @example F8A35034-EDCF-5C50-95A5-1044316F36E3
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 17dc8bcd-f34a-46d1-a7a3-0fa3d1ce3824
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 14356391-6c6c-40d5-b80a-8ecd03b69d72
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 2150432017236011824686132ecdbc
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'event'        => 'event',
        'eventInfo'    => 'eventInfo',
        'requestId'    => 'requestId',
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
