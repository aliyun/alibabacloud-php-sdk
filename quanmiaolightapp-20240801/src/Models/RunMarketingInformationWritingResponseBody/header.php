<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationWritingResponseBody;

use AlibabaCloud\Tea\Model;

class header extends Model
{
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
     * @example 436BC5AE-0573-59D8-9803-6B5FDCD3BBA1
     *
     * @var string
     */
    public $requestId;

    /**
     * @example uqubxgqzlnf4exfektij032lgb3yvix678p232n56387aqxdo4uutdt9wstqzovvz6j3ho7wnbgye785u79yn5q3euqmsvzmqdn3nmfq2826oscjvsi43kof8b8uxufpp1x97jjukk6jd3183hy8ni6hqpskuhuascpd
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 13312125943232
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 213e20e517049392478441155e8b2a
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
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
