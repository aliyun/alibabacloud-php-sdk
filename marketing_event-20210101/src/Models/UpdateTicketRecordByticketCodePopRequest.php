<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Dara\Model;

class UpdateTicketRecordByticketCodePopRequest extends Model
{
    /**
     * @var string
     */
    public $agendaId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'agendaId' => 'AgendaId',
        'code' => 'Code',
        'event' => 'Event',
        'sceneId' => 'SceneId',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
