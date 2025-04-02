<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceRequest\scheduleConfSettingModel;

use AlibabaCloud\Dara\Model;

class moziConfOpenRecordSetting extends Model
{
    /**
     * @var bool
     */
    public $isFollowHost;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $recordAutoStart;

    /**
     * @var int
     */
    public $recordAutoStartType;
    protected $_name = [
        'isFollowHost' => 'IsFollowHost',
        'mode' => 'Mode',
        'recordAutoStart' => 'RecordAutoStart',
        'recordAutoStartType' => 'RecordAutoStartType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isFollowHost) {
            $res['IsFollowHost'] = $this->isFollowHost;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->recordAutoStart) {
            $res['RecordAutoStart'] = $this->recordAutoStart;
        }

        if (null !== $this->recordAutoStartType) {
            $res['RecordAutoStartType'] = $this->recordAutoStartType;
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
        if (isset($map['IsFollowHost'])) {
            $model->isFollowHost = $map['IsFollowHost'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['RecordAutoStart'])) {
            $model->recordAutoStart = $map['RecordAutoStart'];
        }

        if (isset($map['RecordAutoStartType'])) {
            $model->recordAutoStartType = $map['RecordAutoStartType'];
        }

        return $model;
    }
}
