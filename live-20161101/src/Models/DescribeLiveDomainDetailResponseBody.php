<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainDetailResponseBody\domainDetail;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainDetailResponseBody extends Model
{
    /**
     * @description The configuration details of the domain name.
     *
     * @var domainDetail
     */
    public $domainDetail;

    /**
     * @description The ID of the request.
     *
     * @example 09ABE829-6CD3-4FE0-AFEE-556113E29727
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainDetail' => 'DomainDetail',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainDetail) {
            $res['DomainDetail'] = null !== $this->domainDetail ? $this->domainDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainDetail'])) {
            $model->domainDetail = domainDetail::fromMap($map['DomainDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
