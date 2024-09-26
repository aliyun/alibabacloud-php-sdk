<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunCommentGenerationResponseBody;

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
     * @example F8A35034-EDCF-5C50-95A5-1044316F36E3
     *
     * @var string
     */
    public $requestId;

    /**
     * @example tcm9xac9dsfbfgm8hf5k94l3cqybwh9o3mn0iuyytdgd9qoejxf1crxsdvuvr8fu0zuhbe8anhdaoeif2wbkmebagnezh23cuhkiazx2tmjh4eml791eak7t95sshvtkz14bh2lnbktzvdhialzd8reoaem0pktw41slinwyoabe75xlnxsqb5eo1i6ly70
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example task-fu1918oghtodbis3chgpfr
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 21507c3517074446017046500ed5f1
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'event'     => 'event',
        'eventInfo' => 'eventInfo',
        'requestId' => 'requestId',
        'sessionId' => 'sessionId',
        'taskId'    => 'taskId',
        'traceId'   => 'traceId',
    ];

    public function validate()
    {
    }

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
