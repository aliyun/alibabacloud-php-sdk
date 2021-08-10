<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\CreateConferenceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 会议的唯一标识ID。
     *
     * @var string
     */
    public $conferenceId;
    protected $_name = [
        'conferenceId' => 'ConferenceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }

        return $model;
    }
}
