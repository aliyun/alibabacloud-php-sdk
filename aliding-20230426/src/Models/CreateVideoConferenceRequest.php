<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoConferenceRequest extends Model
{
    /**
     * @var string
     */
    public $confTitle;

    /**
     * @example true
     *
     * @var bool
     */
    public $inviteCaller;

    /**
     * @var string[]
     */
    public $inviteUserIds;
    protected $_name = [
        'confTitle'     => 'ConfTitle',
        'inviteCaller'  => 'InviteCaller',
        'inviteUserIds' => 'InviteUserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confTitle) {
            $res['ConfTitle'] = $this->confTitle;
        }
        if (null !== $this->inviteCaller) {
            $res['InviteCaller'] = $this->inviteCaller;
        }
        if (null !== $this->inviteUserIds) {
            $res['InviteUserIds'] = $this->inviteUserIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoConferenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfTitle'])) {
            $model->confTitle = $map['ConfTitle'];
        }
        if (isset($map['InviteCaller'])) {
            $model->inviteCaller = $map['InviteCaller'];
        }
        if (isset($map['InviteUserIds'])) {
            if (!empty($map['InviteUserIds'])) {
                $model->inviteUserIds = $map['InviteUserIds'];
            }
        }

        return $model;
    }
}
