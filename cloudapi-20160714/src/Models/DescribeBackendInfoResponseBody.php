<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo;
use AlibabaCloud\Tea\Model;

class DescribeBackendInfoResponseBody extends Model
{
    /**
     * @description The information about the backend service.
     *
     * @var backendInfo
     */
    public $backendInfo;

    /**
     * @description The ID of the request.
     *
     * @example 0AA90E87-3506-5AA6-AFFB-A4D53B4F6231
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backendInfo' => 'BackendInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendInfo) {
            $res['BackendInfo'] = null !== $this->backendInfo ? $this->backendInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackendInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendInfo'])) {
            $model->backendInfo = backendInfo::fromMap($map['BackendInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
