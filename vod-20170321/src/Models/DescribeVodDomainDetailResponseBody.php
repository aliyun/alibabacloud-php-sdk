<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponseBody\domainDetail;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainDetail
     */
    public $domainDetail;
    protected $_name = [
        'requestId'    => 'RequestId',
        'domainDetail' => 'DomainDetail',
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
        if (null !== $this->domainDetail) {
            $res['DomainDetail'] = null !== $this->domainDetail ? $this->domainDetail->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainDetail'])) {
            $model->domainDetail = domainDetail::fromMap($map['DomainDetail']);
        }

        return $model;
    }
}
