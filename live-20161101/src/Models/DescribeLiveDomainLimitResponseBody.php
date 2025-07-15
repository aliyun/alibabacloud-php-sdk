<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponseBody\liveDomainLimitList;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainLimitResponseBody extends Model
{
    /**
     * @description The limits.
     *
     * @var liveDomainLimitList
     */
    public $liveDomainLimitList;

    /**
     * @description The request ID.
     *
     * @example A3136B58-5876-4168-83CA-B562781981A0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveDomainLimitList' => 'LiveDomainLimitList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveDomainLimitList) {
            $res['LiveDomainLimitList'] = null !== $this->liveDomainLimitList ? $this->liveDomainLimitList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainLimitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveDomainLimitList'])) {
            $model->liveDomainLimitList = liveDomainLimitList::fromMap($map['LiveDomainLimitList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
