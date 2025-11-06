<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\BatchFuzzyMatchDomainSensitiveWordResponseBody\sensitiveWordMatchResultList;

class BatchFuzzyMatchDomainSensitiveWordResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sensitiveWordMatchResultList
     */
    public $sensitiveWordMatchResultList;
    protected $_name = [
        'requestId' => 'RequestId',
        'sensitiveWordMatchResultList' => 'SensitiveWordMatchResultList',
    ];

    public function validate()
    {
        if (null !== $this->sensitiveWordMatchResultList) {
            $this->sensitiveWordMatchResultList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sensitiveWordMatchResultList) {
            $res['SensitiveWordMatchResultList'] = null !== $this->sensitiveWordMatchResultList ? $this->sensitiveWordMatchResultList->toArray($noStream) : $this->sensitiveWordMatchResultList;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SensitiveWordMatchResultList'])) {
            $model->sensitiveWordMatchResultList = sensitiveWordMatchResultList::fromMap($map['SensitiveWordMatchResultList']);
        }

        return $model;
    }
}
