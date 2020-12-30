<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponseBody\domainDetail;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainDetailResponseBody extends Model
{
    /**
     * @var domainDetail
     */
    public $domainDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainDetail' => 'DomainDetail',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return DescribeVodDomainDetailResponseBody
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
