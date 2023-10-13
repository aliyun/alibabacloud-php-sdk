<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusRequest;

use AlibabaCloud\Tea\Model;

class inviteStatusList extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $inviteId;
    protected $_name = [
        'inviteId' => 'InviteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inviteId) {
            $res['InviteId'] = $this->inviteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inviteStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InviteId'])) {
            $model->inviteId = $map['InviteId'];
        }

        return $model;
    }
}
