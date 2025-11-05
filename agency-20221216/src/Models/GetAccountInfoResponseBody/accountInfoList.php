<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetAccountInfoResponseBody\accountInfoList\accountInfo;

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
        if (\is_array($this->accountInfo)) {
            Model::validateArray($this->accountInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountInfo) {
            if (\is_array($this->accountInfo)) {
                $res['AccountInfo'] = [];
                $n1 = 0;
                foreach ($this->accountInfo as $item1) {
                    $res['AccountInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccountInfo'])) {
            if (!empty($map['AccountInfo'])) {
                $model->accountInfo = [];
                $n1 = 0;
                foreach ($map['AccountInfo'] as $item1) {
                    $model->accountInfo[$n1] = accountInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
