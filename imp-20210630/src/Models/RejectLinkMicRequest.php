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
     * @description 同意者用户ID
     *
     * @var string
     */
    public $fromUserId;

    /**
     * @description 地域
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 被同意用户ID
     *
     * @var string
     */
    public $toUserId;
    protected $_name = [
        'conferenceId' => 'ConferenceId',
        'fromUserId'   => 'FromUserId',
        'regionId'     => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->toUserId) {
            $res['ToUserId'] = $this->toUserId;
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
        if (isset($map['FromUserId'])) {
            $model->fromUserId = $map['FromUserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ToUserId'])) {
            $model->toUserId = $map['ToUserId'];
        }

        return $model;
    }
}
