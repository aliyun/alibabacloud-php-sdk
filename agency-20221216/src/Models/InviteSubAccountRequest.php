<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Agency\V20221216\Models\InviteSubAccountRequest\accountInfoList;

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
        if (\is_array($this->accountInfoList)) {
            Model::validateArray($this->accountInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountInfoList) {
            if (\is_array($this->accountInfoList)) {
                $res['AccountInfoList'] = [];
                $n1 = 0;
                foreach ($this->accountInfoList as $item1) {
                    $res['AccountInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccountInfoList'])) {
            if (!empty($map['AccountInfoList'])) {
                $model->accountInfoList = [];
                $n1 = 0;
                foreach ($map['AccountInfoList'] as $item1) {
                    $model->accountInfoList[$n1] = accountInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
