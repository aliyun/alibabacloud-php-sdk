<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->backendInfo) {
            $this->backendInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendInfo) {
            $res['BackendInfo'] = null !== $this->backendInfo ? $this->backendInfo->toArray($noStream) : $this->backendInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
