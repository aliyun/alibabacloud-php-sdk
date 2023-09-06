<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountRequest\accountInfoList;
use AlibabaCloud\Tea\Model;

class InviteSubAccountRequest extends Model
{
    /**
     * @var accountInfoList[]
     */
    public $accountInfoList;
    protected $_name = [
        'accountInfoList' => 'AccountInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountInfoList) {
            $res['AccountInfoList'] = [];
            if (null !== $this->accountInfoList && \is_array($this->accountInfoList)) {
                $n = 0;
                foreach ($this->accountInfoList as $item) {
                    $res['AccountInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InviteSubAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountInfoList'])) {
            if (!empty($map['AccountInfoList'])) {
                $model->accountInfoList = [];
                $n                      = 0;
                foreach ($map['AccountInfoList'] as $item) {
                    $model->accountInfoList[$n++] = null !== $item ? accountInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
