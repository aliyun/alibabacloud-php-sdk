<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoConferenceShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
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
     * @var string
     */
    public $inviteUserIdsShrink;
    protected $_name = [
        'confTitle'           => 'ConfTitle',
        'inviteCaller'        => 'InviteCaller',
        'inviteUserIdsShrink' => 'InviteUserIds',
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
        if (null !== $this->inviteUserIdsShrink) {
            $res['InviteUserIds'] = $this->inviteUserIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoConferenceShrinkRequest
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
            $model->inviteUserIdsShrink = $map['InviteUserIds'];
        }

        return $model;
    }
}
