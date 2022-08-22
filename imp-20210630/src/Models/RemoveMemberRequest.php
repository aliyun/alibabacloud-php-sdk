<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class RemoveMemberRequest extends Model
{
    /**
     * @var string
     */
    public $conferenceId;

    /**
     * @var string
     */
    public $fromUserId;

    /**
     * @var string
     */
    public $toUserId;
    protected $_name = [
        'conferenceId' => 'ConferenceId',
        'fromUserId'   => 'FromUserId',
        'toUserId'     => 'ToUserId',
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
        if (null !== $this->fromUserId) {
            $res['FromUserId'] = $this->fromUserId;
        }
        if (null !== $this->toUserId) {
            $res['ToUserId'] = $this->toUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }
        if (isset($map['FromUserId'])) {
            $model->fromUserId = $map['FromUserId'];
        }
        if (isset($map['ToUserId'])) {
            $model->toUserId = $map['ToUserId'];
        }

        return $model;
    }
}
