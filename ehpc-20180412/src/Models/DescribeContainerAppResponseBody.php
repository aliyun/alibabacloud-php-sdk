<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeContainerAppResponseBody\containerAppInfo;
use AlibabaCloud\Tea\Model;

class DescribeContainerAppResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var containerAppInfo
     */
    public $containerAppInfo;
    protected $_name = [
        'requestId'        => 'RequestId',
        'containerAppInfo' => 'ContainerAppInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->containerAppInfo) {
            $res['ContainerAppInfo'] = null !== $this->containerAppInfo ? $this->containerAppInfo->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ContainerAppInfo'])) {
            $model->containerAppInfo = containerAppInfo::fromMap($map['ContainerAppInfo']);
        }

        return $model;
    }
}
