<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo;
use AlibabaCloud\Tea\Model;

class DescribeBackendInfoResponseBody extends Model
{
    /**
     * @var backendInfo
     */
    public $backendInfo;

    /**
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
