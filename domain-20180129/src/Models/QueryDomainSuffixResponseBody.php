<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSuffixResponseBody\suffixList;

class QueryDomainSuffixResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var suffixList
     */
    public $suffixList;
    protected $_name = [
        'requestId' => 'RequestId',
        'suffixList' => 'SuffixList',
    ];

    public function validate()
    {
        if (null !== $this->suffixList) {
            $this->suffixList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->suffixList) {
            $res['SuffixList'] = null !== $this->suffixList ? $this->suffixList->toArray($noStream) : $this->suffixList;
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

        if (isset($map['SuffixList'])) {
            $model->suffixList = suffixList::fromMap($map['SuffixList']);
        }

        return $model;
    }
}
