<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponseBody\domainLogDetails;
use AlibabaCloud\Tea\Model;

class DescribeVodDomainLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainLogDetails
     */
    public $domainLogDetails;
    protected $_name = [
        'requestId'        => 'RequestId',
        'domainLogDetails' => 'DomainLogDetails',
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
        if (null !== $this->domainLogDetails) {
            $res['DomainLogDetails'] = null !== $this->domainLogDetails ? $this->domainLogDetails->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainLogDetails'])) {
            $model->domainLogDetails = domainLogDetails::fromMap($map['DomainLogDetails']);
        }

        return $model;
    }
}
