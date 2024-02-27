<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusRequest\inviteStatusList;
use AlibabaCloud\Tea\Model;

class GetInviteStatusRequest extends Model
{
    /**
     * @description inviteId list</br>
     * `Sub-levels <= 5`
     * @var inviteStatusList[]
     */
    public $inviteStatusList;
    protected $_name = [
        'inviteStatusList' => 'InviteStatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inviteStatusList) {
            $res['InviteStatusList'] = [];
            if (null !== $this->inviteStatusList && \is_array($this->inviteStatusList)) {
                $n = 0;
                foreach ($this->inviteStatusList as $item) {
                    $res['InviteStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInviteStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InviteStatusList'])) {
            if (!empty($map['InviteStatusList'])) {
                $model->inviteStatusList = [];
                $n                       = 0;
                foreach ($map['InviteStatusList'] as $item) {
                    $model->inviteStatusList[$n++] = null !== $item ? inviteStatusList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
