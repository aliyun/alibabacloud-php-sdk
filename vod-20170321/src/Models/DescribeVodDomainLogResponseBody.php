<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponseBody\domainLogDetails;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainLogResponseBody extends Model
{
    /**
     * @description The details of CDN logs.
     *
     * @var domainLogDetails
     */
    public $domainLogDetails;

    /**
     * @description The request ID.
     *
     * @example 077D0284-F041-4A41-4D3C-B48377FD****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainLogDetails' => 'DomainLogDetails',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainLogDetails) {
            $res['DomainLogDetails'] = null !== $this->domainLogDetails ? $this->domainLogDetails->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainLogDetails'])) {
            $model->domainLogDetails = domainLogDetails::fromMap($map['DomainLogDetails']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
