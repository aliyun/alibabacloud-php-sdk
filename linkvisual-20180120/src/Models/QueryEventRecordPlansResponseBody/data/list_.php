<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryEventRecordPlansResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $eventType;

    /**
     * @example test
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
     * @example 5
     *
     * @var int
     */
    public $preRecordDuration;

    /**
     * @example 60
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
        'eventType'         => 'EventType',
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
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
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
