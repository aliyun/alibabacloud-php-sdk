<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateEventRecordPlanRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $eventTypes;

    /**
     * @example record1
     *
     * @var string
     */
    public $name;

    /**
     * @example 5b60bf0dd55944c19d7817442bc9****
     *
     * @var string
     */
    public $planId;

    /**
     * @example 10
     *
     * @var int
     */
    public $preRecordDuration;

    /**
     * @example 30
     *
     * @var int
     */
    public $recordDuration;

    /**
     * @example 36f06322442e4e3f85a5ae8862c9****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'eventTypes'        => 'EventTypes',
        'name'              => 'Name',
        'planId'            => 'PlanId',
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
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
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
     * @return UpdateEventRecordPlanRequest
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
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
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
