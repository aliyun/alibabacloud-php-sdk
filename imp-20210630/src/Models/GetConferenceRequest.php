<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class GetConferenceRequest extends Model
{
    /**
     * @description 会议资源唯一标识。
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
     * @return GetConferenceRequest
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
