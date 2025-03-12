<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetApplicationProvisionInfoResponseBody\applicationProvisionInfo;
use AlibabaCloud\Tea\Model;

class GetApplicationProvisionInfoResponseBody extends Model
{
    /**
     * @description The installation information about the application.
     *
     * @var applicationProvisionInfo
     */
    public $applicationProvisionInfo;

    /**
     * @description The request ID.
     *
     * @example 936E1D9C-157D-45BD-8A3B-81C0716EB078
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationProvisionInfo' => 'ApplicationProvisionInfo',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationProvisionInfo) {
            $res['ApplicationProvisionInfo'] = null !== $this->applicationProvisionInfo ? $this->applicationProvisionInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApplicationProvisionInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationProvisionInfo'])) {
            $model->applicationProvisionInfo = applicationProvisionInfo::fromMap($map['ApplicationProvisionInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
