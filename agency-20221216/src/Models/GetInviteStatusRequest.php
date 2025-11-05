<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusRequest\inviteStatusList;

class GetInviteStatusRequest extends Model
{
    /**
     * @var inviteStatusList[]
     */
    public $inviteStatusList;
    protected $_name = [
        'inviteStatusList' => 'InviteStatusList',
    ];

    public function validate()
    {
        if (\is_array($this->inviteStatusList)) {
            Model::validateArray($this->inviteStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inviteStatusList) {
            if (\is_array($this->inviteStatusList)) {
                $res['InviteStatusList'] = [];
                $n1 = 0;
                foreach ($this->inviteStatusList as $item1) {
                    $res['InviteStatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InviteStatusList'])) {
            if (!empty($map['InviteStatusList'])) {
                $model->inviteStatusList = [];
                $n1 = 0;
                foreach ($map['InviteStatusList'] as $item1) {
                    $model->inviteStatusList[$n1] = inviteStatusList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
