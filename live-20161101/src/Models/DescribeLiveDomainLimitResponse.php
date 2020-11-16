<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainLimitResponse\liveDomainLimitList;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainLimitResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveDomainLimitList
     */
    public $liveDomainLimitList;
    protected $_name = [
        'requestId'           => 'RequestId',
        'liveDomainLimitList' => 'LiveDomainLimitList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('liveDomainLimitList', $this->liveDomainLimitList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->liveDomainLimitList) {
            $res['LiveDomainLimitList'] = null !== $this->liveDomainLimitList ? $this->liveDomainLimitList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainLimitResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveDomainLimitList'])) {
            $model->liveDomainLimitList = liveDomainLimitList::fromMap($map['LiveDomainLimitList']);
        }

        return $model;
    }
}
