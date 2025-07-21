<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class CheckDomainResponseBody extends Model
{
    /**
     * @description Domain status. Indicates whether the verification was successful, with values as follows:
     *
     * - **0**: Available, verified successfully
     * - **1**: Unavailable, verification failed
     *
     * @example 1
     *
     * @var int
     */
    public $domainStatus;

    /**
     * @description Request ID
     *
     * @example F0B82E83-A1D9-4FE6-97D2-F4B231F80B02
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainStatus' => 'DomainStatus',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
