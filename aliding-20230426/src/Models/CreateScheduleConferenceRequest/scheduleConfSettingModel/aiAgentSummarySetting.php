<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceRequest\scheduleConfSettingModel;

use AlibabaCloud\Dara\Model;

class aiAgentSummarySetting extends Model
{
    /**
     * @var int
     */
    public $allowAllParticipantsStart;

    /**
     * @var int
     */
    public $receiverType;

    /**
     * @var int
     */
    public $restrictShareMinutesSummaryOnly;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'allowAllParticipantsStart' => 'AllowAllParticipantsStart',
        'receiverType' => 'ReceiverType',
        'restrictShareMinutesSummaryOnly' => 'RestrictShareMinutesSummaryOnly',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowAllParticipantsStart) {
            $res['AllowAllParticipantsStart'] = $this->allowAllParticipantsStart;
        }

        if (null !== $this->receiverType) {
            $res['ReceiverType'] = $this->receiverType;
        }

        if (null !== $this->restrictShareMinutesSummaryOnly) {
            $res['RestrictShareMinutesSummaryOnly'] = $this->restrictShareMinutesSummaryOnly;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['AllowAllParticipantsStart'])) {
            $model->allowAllParticipantsStart = $map['AllowAllParticipantsStart'];
        }

        if (isset($map['ReceiverType'])) {
            $model->receiverType = $map['ReceiverType'];
        }

        if (isset($map['RestrictShareMinutesSummaryOnly'])) {
            $model->restrictShareMinutesSummaryOnly = $map['RestrictShareMinutesSummaryOnly'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
