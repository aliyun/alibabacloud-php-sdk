<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetUnassociatedCustomerResponseBody;

use AlibabaCloud\SDK\Agency\V20221216\Models\GetUnassociatedCustomerResponseBody\inviteInfoList\inviteInfo;
use AlibabaCloud\Tea\Model;

class inviteInfoList extends Model
{
    /**
     * @var inviteInfo[]
     */
    public $inviteInfo;
    protected $_name = [
        'inviteInfo' => 'InviteInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inviteInfo) {
            $res['InviteInfo'] = [];
            if (null !== $this->inviteInfo && \is_array($this->inviteInfo)) {
                $n = 0;
                foreach ($this->inviteInfo as $item) {
                    $res['InviteInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inviteInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InviteInfo'])) {
            if (!empty($map['InviteInfo'])) {
                $model->inviteInfo = [];
                $n                 = 0;
                foreach ($map['InviteInfo'] as $item) {
                    $model->inviteInfo[$n++] = null !== $item ? inviteInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
