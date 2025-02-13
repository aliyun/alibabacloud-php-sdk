<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateVideoConferenceRequest extends Model
{
    /**
     * @var string
     */
    public $confTitle;
    /**
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
        if (\is_array($this->inviteUserIds)) {
            Model::validateArray($this->inviteUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confTitle) {
            $res['ConfTitle'] = $this->confTitle;
        }

        if (null !== $this->inviteCaller) {
            $res['InviteCaller'] = $this->inviteCaller;
        }

        if (null !== $this->inviteUserIds) {
            if (\is_array($this->inviteUserIds)) {
                $res['InviteUserIds'] = [];
                $n1                   = 0;
                foreach ($this->inviteUserIds as $item1) {
                    $res['InviteUserIds'][$n1++] = $item1;
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
        if (isset($map['ConfTitle'])) {
            $model->confTitle = $map['ConfTitle'];
        }

        if (isset($map['InviteCaller'])) {
            $model->inviteCaller = $map['InviteCaller'];
        }

        if (isset($map['InviteUserIds'])) {
            if (!empty($map['InviteUserIds'])) {
                $model->inviteUserIds = [];
                $n1                   = 0;
                foreach ($map['InviteUserIds'] as $item1) {
                    $model->inviteUserIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
