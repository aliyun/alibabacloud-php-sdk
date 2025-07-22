<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;

use AlibabaCloud\Tea\Model;

class meetingAssistance extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $meetingAssistanceType;
    protected $_name = [
        'enabled' => 'Enabled',
        'meetingAssistanceType' => 'MeetingAssistanceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->meetingAssistanceType) {
            $res['MeetingAssistanceType'] = $this->meetingAssistanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meetingAssistance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['MeetingAssistanceType'])) {
            if (!empty($map['MeetingAssistanceType'])) {
                $model->meetingAssistanceType = $map['MeetingAssistanceType'];
            }
        }

        return $model;
    }
}
