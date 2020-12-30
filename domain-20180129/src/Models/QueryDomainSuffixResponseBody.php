<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSuffixResponseBody\suffixList;
use AlibabaCloud\Tea\Model;

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
        'requestId'  => 'RequestId',
        'suffixList' => 'SuffixList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->suffixList) {
            $res['SuffixList'] = null !== $this->suffixList ? $this->suffixList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainSuffixResponseBody
     */
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
