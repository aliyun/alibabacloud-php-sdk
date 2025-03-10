<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @example AccessForbidden
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example task-finished
     *
     * @var string
     */
    public $event;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'event'        => 'event',
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
