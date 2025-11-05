<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetUnassociatedCustomerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetUnassociatedCustomerResponseBody\inviteInfoList\inviteInfo;

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
        if (\is_array($this->inviteInfo)) {
            Model::validateArray($this->inviteInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inviteInfo) {
            if (\is_array($this->inviteInfo)) {
                $res['InviteInfo'] = [];
                $n1 = 0;
                foreach ($this->inviteInfo as $item1) {
                    $res['InviteInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InviteInfo'])) {
            if (!empty($map['InviteInfo'])) {
                $model->inviteInfo = [];
                $n1 = 0;
                foreach ($map['InviteInfo'] as $item1) {
                    $model->inviteInfo[$n1] = inviteInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
