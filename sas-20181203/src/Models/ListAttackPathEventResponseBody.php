<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAttackPathEventResponseBody\attackPathEventList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAttackPathEventResponseBody\pageInfo;

class ListAttackPathEventResponseBody extends Model
{
    /**
     * @var attackPathEventList[]
     */
    public $attackPathEventList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackPathEventList' => 'AttackPathEventList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attackPathEventList)) {
            Model::validateArray($this->attackPathEventList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathEventList) {
            if (\is_array($this->attackPathEventList)) {
                $res['AttackPathEventList'] = [];
                $n1 = 0;
                foreach ($this->attackPathEventList as $item1) {
                    $res['AttackPathEventList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttackPathEventList'])) {
            if (!empty($map['AttackPathEventList'])) {
                $model->attackPathEventList = [];
                $n1 = 0;
                foreach ($map['AttackPathEventList'] as $item1) {
                    $model->attackPathEventList[$n1] = attackPathEventList::fromMap($item1);
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
