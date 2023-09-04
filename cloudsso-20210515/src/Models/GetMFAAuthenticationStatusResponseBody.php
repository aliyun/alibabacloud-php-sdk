<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class GetMFAAuthenticationStatusResponseBody extends Model
{
    /**
     * @description The status of MFA. Valid values:
     *
     *   Enabled
     *   Disabled
     *
     * @example Enabled
     *
     * @var string
     */
    public $MFAAuthenticationStatus;

    /**
     * @description The ID of the request.
     *
     * @example 5E688346-DF1A-5537-9BFC-8A9974D29586
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'MFAAuthenticationStatus' => 'MFAAuthenticationStatus',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->MFAAuthenticationStatus) {
            $res['MFAAuthenticationStatus'] = $this->MFAAuthenticationStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMFAAuthenticationStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MFAAuthenticationStatus'])) {
            $model->MFAAuthenticationStatus = $map['MFAAuthenticationStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
