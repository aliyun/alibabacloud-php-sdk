<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopAttackListResponseBody\attackList;

class DescribeDomainTopAttackListResponseBody extends Model
{
    /**
     * @var attackList[]
     */
    public $attackList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackList' => 'AttackList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attackList)) {
            Model::validateArray($this->attackList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackList) {
            if (\is_array($this->attackList)) {
                $res['AttackList'] = [];
                $n1 = 0;
                foreach ($this->attackList as $item1) {
                    $res['AttackList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AttackList'])) {
            if (!empty($map['AttackList'])) {
                $model->attackList = [];
                $n1 = 0;
                foreach ($map['AttackList'] as $item1) {
                    $model->attackList[$n1] = attackList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
