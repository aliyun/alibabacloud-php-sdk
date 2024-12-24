<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConfSettingsRequest\scheduleConfSettingModel;

use AlibabaCloud\Tea\Model;

class moziConfOpenRecordSetting extends Model
{
    /**
     * @var bool
     */
    public $isFollowHost;

    /**
     * @example grid
     *
     * @var string
     */
    public $mode;

    /**
     * @example 0
     *
     * @var int
     */
    public $recordAutoStart;

    /**
     * @example 0
     *
     * @var int
     */
    public $recordAutoStartType;
    protected $_name = [
        'isFollowHost'        => 'IsFollowHost',
        'mode'                => 'Mode',
        'recordAutoStart'     => 'RecordAutoStart',
        'recordAutoStartType' => 'RecordAutoStartType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return moziConfOpenRecordSetting
     */
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
