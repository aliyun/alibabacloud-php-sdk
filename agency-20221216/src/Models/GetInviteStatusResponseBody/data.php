<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody;

use AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody\data\inviteStatus;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var inviteStatus[]
     */
    public $inviteStatus;
    protected $_name = [
        'inviteStatus' => 'InviteStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inviteStatus) {
            $res['InviteStatus'] = [];
            if (null !== $this->inviteStatus && \is_array($this->inviteStatus)) {
                $n = 0;
                foreach ($this->inviteStatus as $item) {
                    $res['InviteStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InviteStatus'])) {
            if (!empty($map['InviteStatus'])) {
                $model->inviteStatus = [];
                $n                   = 0;
                foreach ($map['InviteStatus'] as $item) {
                    $model->inviteStatus[$n++] = null !== $item ? inviteStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
