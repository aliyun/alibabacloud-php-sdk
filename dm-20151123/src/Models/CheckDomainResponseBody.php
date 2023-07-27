<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class CheckDomainResponseBody extends Model
{
    /**
     * @description The status of the domain name. Indicates whether the domain name is verified and available.
     *
     *   0: indicates that the domain name is verified and available.
     *   1: indicates that the domain name fails to be verified and is unavailable.
     *   2: indicates that the domain name is available, but not filed or configured with a CNAME record.
     *   3: indicates that the domain name is available but not filed.
     *   4: indicates that the domain name is available but not configured with a CNAME record.
     *
     * @example 1
     *
     * @var int
     */
    public $domainStatus;

    /**
     * @description The ID of the request.
     *
     * @example F0B82E83-A1D9-4FE6-97D2-F4B231F80B02
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainStatus' => 'DomainStatus',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
