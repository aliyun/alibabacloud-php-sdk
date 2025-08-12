<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponseBody\liveDomainLimitList;

class DescribeLiveDomainLimitResponseBody extends Model
{
    /**
     * @var liveDomainLimitList
     */
    public $liveDomainLimitList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveDomainLimitList' => 'LiveDomainLimitList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->liveDomainLimitList) {
            $this->liveDomainLimitList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveDomainLimitList) {
            $res['LiveDomainLimitList'] = null !== $this->liveDomainLimitList ? $this->liveDomainLimitList->toArray($noStream) : $this->liveDomainLimitList;
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
        if (isset($map['LiveDomainLimitList'])) {
            $model->liveDomainLimitList = liveDomainLimitList::fromMap($map['LiveDomainLimitList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
