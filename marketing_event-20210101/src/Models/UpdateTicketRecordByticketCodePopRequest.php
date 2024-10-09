<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTicketRecordByticketCodePopRequest extends Model
{
    /**
     * @example 3402
     *
     * @var string
     */
    public $agendaId;

    /**
     * @example 4546-100000
     *
     * @var string
     */
    public $code;

    /**
     * @example boarding
     *
     * @var string
     */
    public $event;

    /**
     * @example 12345
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example 2024-09-25 14:11
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'agendaId' => 'AgendaId',
        'code'     => 'Code',
        'event'    => 'Event',
        'sceneId'  => 'SceneId',
        'time'     => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agendaId) {
            $res['AgendaId'] = $this->agendaId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTicketRecordByticketCodePopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgendaId'])) {
            $model->agendaId = $map['AgendaId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
