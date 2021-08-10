<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class RejectLinkMicRequest extends Model
{
    /**
     * @description 会议唯一标识
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @description 被同意用户ID
     *
     * @var string
     */
    public $toUserId;

    /**
     * @description 同意者用户ID
     *
     * @var string
     */
    public $fromUserId;
    protected $_name = [
        'conferenceId' => 'ConferenceId',
        'toUserId'     => 'ToUserId',
        'fromUserId'   => 'FromUserId',
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
        if (null !== $this->toUserId) {
            $res['ToUserId'] = $this->toUserId;
        }
        if (null !== $this->fromUserId) {
            $res['FromUserId'] = $this->fromUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RejectLinkMicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }
        if (isset($map['ToUserId'])) {
            $model->toUserId = $map['ToUserId'];
        }
        if (isset($map['FromUserId'])) {
            $model->fromUserId = $map['FromUserId'];
        }

        return $model;
    }
}
