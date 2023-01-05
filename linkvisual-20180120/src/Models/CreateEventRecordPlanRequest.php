<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateEventRecordPlanRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $eventTypes;

    /**
     * @example plan1
     *
     * @var string
     */
    public $name;

    /**
     * @example 5
     *
     * @var int
     */
    public $preRecordDuration;

    /**
     * @example 10
     *
     * @var int
     */
    public $recordDuration;

    /**
     * @example fc82774fa749485bad7d719f9670****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'eventTypes'        => 'EventTypes',
        'name'              => 'Name',
        'preRecordDuration' => 'PreRecordDuration',
        'recordDuration'    => 'RecordDuration',
        'templateId'        => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventTypes) {
            $res['EventTypes'] = $this->eventTypes;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->preRecordDuration) {
            $res['PreRecordDuration'] = $this->preRecordDuration;
        }
        if (null !== $this->recordDuration) {
            $res['RecordDuration'] = $this->recordDuration;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEventRecordPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventTypes'])) {
            $model->eventTypes = $map['EventTypes'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PreRecordDuration'])) {
            $model->preRecordDuration = $map['PreRecordDuration'];
        }
        if (isset($map['RecordDuration'])) {
            $model->recordDuration = $map['RecordDuration'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
