<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountKmsStatusResponseBody extends Model
{
    /**
     * @description The status of KMS within your Alibaba cloud account. Valid values:
     *
     *   Enabled: KMS is enabled.
     *
     *   NotEnabled: KMS is disabled.
     *
     *   InDebt: Your account is overdue, and KMS stops providing services.
     *
     * > If your Alibaba Cloud account is overdue, top up your account at the earliest opportunity to avoid impacts on your services.
     *
     *   Suspended: KMS is suspended.
     *
     * @example Enabled
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 3ac84333-d64d-4784-a8bc-997834a7ac6c
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountStatus' => 'AccountStatus',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountKmsStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
