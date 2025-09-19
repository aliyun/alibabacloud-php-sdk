<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAttackPathWhitelistResponseBody\attackPathWhitelistList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAttackPathWhitelistResponseBody\pageInfo;

class ListAttackPathWhitelistResponseBody extends Model
{
    /**
     * @var attackPathWhitelistList[]
     */
    public $attackPathWhitelistList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackPathWhitelistList' => 'AttackPathWhitelistList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attackPathWhitelistList)) {
            Model::validateArray($this->attackPathWhitelistList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathWhitelistList) {
            if (\is_array($this->attackPathWhitelistList)) {
                $res['AttackPathWhitelistList'] = [];
                $n1 = 0;
                foreach ($this->attackPathWhitelistList as $item1) {
                    $res['AttackPathWhitelistList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AttackPathWhitelistList'])) {
            if (!empty($map['AttackPathWhitelistList'])) {
                $model->attackPathWhitelistList = [];
                $n1 = 0;
                foreach ($map['AttackPathWhitelistList'] as $item1) {
                    $model->attackPathWhitelistList[$n1] = attackPathWhitelistList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
