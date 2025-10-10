<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest;

use AlibabaCloud\Dara\Model;

class meetingAssistance extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string[]
     */
    public $meetingAssistanceType;
    protected $_name = [
        'enabled' => 'Enabled',
        'meetingAssistanceType' => 'MeetingAssistanceType',
    ];

    public function validate()
    {
        if (\is_array($this->meetingAssistanceType)) {
            Model::validateArray($this->meetingAssistanceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->meetingAssistanceType) {
            if (\is_array($this->meetingAssistanceType)) {
                $res['MeetingAssistanceType'] = [];
                $n1 = 0;
                foreach ($this->meetingAssistanceType as $item1) {
                    $res['MeetingAssistanceType'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['MeetingAssistanceType'])) {
            if (!empty($map['MeetingAssistanceType'])) {
                $model->meetingAssistanceType = [];
                $n1 = 0;
                foreach ($map['MeetingAssistanceType'] as $item1) {
                    $model->meetingAssistanceType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
