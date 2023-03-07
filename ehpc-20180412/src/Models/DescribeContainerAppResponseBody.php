<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeContainerAppResponseBody\containerAppInfo;
use AlibabaCloud\Tea\Model;

class DescribeContainerAppResponseBody extends Model
{
    /**
     * @description The information of the containerized application.
     *
     * @var containerAppInfo
     */
    public $containerAppInfo;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE7****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerAppInfo' => 'ContainerAppInfo',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerAppInfo) {
            $res['ContainerAppInfo'] = null !== $this->containerAppInfo ? $this->containerAppInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerAppInfo'])) {
            $model->containerAppInfo = containerAppInfo::fromMap($map['ContainerAppInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
