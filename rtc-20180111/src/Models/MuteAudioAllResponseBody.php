<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\MuteAudioAllResponseBody\participants;
use AlibabaCloud\Tea\Model;

class MuteAudioAllResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $conferenceId;

    /**
     * @var participants
     */
    public $participants;
    protected $_name = [
        'requestId'    => 'RequestId',
        'conferenceId' => 'ConferenceId',
        'participants' => 'Participants',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }
        if (null !== $this->participants) {
            $res['Participants'] = null !== $this->participants ? $this->participants->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MuteAudioAllResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }
        if (isset($map['Participants'])) {
            $model->participants = participants::fromMap($map['Participants']);
        }

        return $model;
    }
}
