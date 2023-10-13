<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoResponseBody;

use AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoResponseBody\accountInfoList\accountInfo;
use AlibabaCloud\Tea\Model;

class accountInfoList extends Model
{
    /**
     * @var accountInfo[]
     */
    public $accountInfo;
    protected $_name = [
        'accountInfo' => 'AccountInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountInfo) {
            $res['AccountInfo'] = [];
            if (null !== $this->accountInfo && \is_array($this->accountInfo)) {
                $n = 0;
                foreach ($this->accountInfo as $item) {
                    $res['AccountInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountInfo'])) {
            if (!empty($map['AccountInfo'])) {
                $model->accountInfo = [];
                $n                  = 0;
                foreach ($map['AccountInfo'] as $item) {
                    $model->accountInfo[$n++] = null !== $item ? accountInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
