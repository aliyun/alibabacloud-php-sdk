<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsExTtlResponseBody\domainLogDetails;
use AlibabaCloud\Tea\Model;

class DescribeCdnDomainLogsExTtlResponseBody extends Model
{
    /**
     * @var domainLogDetails
     */
    public $domainLogDetails;

    /**
     * @example 64D28B53-5902-409B-94F6-FD46680144FE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainLogDetails' => 'DomainLogDetails',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return DescribeCdnDomainLogsExTtlResponseBody
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
