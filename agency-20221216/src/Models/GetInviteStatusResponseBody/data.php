<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody\data\inviteStatus;

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
        if (\is_array($this->inviteStatus)) {
            Model::validateArray($this->inviteStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inviteStatus) {
            if (\is_array($this->inviteStatus)) {
                $res['InviteStatus'] = [];
                $n1 = 0;
                foreach ($this->inviteStatus as $item1) {
                    $res['InviteStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['InviteStatus'])) {
            if (!empty($map['InviteStatus'])) {
                $model->inviteStatus = [];
                $n1 = 0;
                foreach ($map['InviteStatus'] as $item1) {
                    $model->inviteStatus[$n1] = inviteStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
