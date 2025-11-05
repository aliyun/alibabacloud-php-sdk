<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusRequest;

use AlibabaCloud\Dara\Model;

class inviteStatusList extends Model
{
    /**
     * @var int
     */
    public $inviteId;
    protected $_name = [
        'inviteId' => 'InviteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inviteId) {
            $res['InviteId'] = $this->inviteId;
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
        if (isset($map['InviteId'])) {
            $model->inviteId = $map['InviteId'];
        }

        return $model;
    }
}
