<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopAttackListResponseBody\attackList;
use AlibabaCloud\Tea\Model;

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
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackList) {
            $res['AttackList'] = [];
            if (null !== $this->attackList && \is_array($this->attackList)) {
                $n = 0;
                foreach ($this->attackList as $item) {
                    $res['AttackList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainTopAttackListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackList'])) {
            if (!empty($map['AttackList'])) {
                $model->attackList = [];
                $n                 = 0;
                foreach ($map['AttackList'] as $item) {
                    $model->attackList[$n++] = null !== $item ? attackList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
