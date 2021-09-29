<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListHostDevicesResponseBody\hostDevices;
use AlibabaCloud\Tea\Model;

class ListHostDevicesResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 表示当前调用返回读取到的位置，空代表数据已经读取完毕
     *
     * @var hostDevices
     */
    public $hostDevices;
    protected $_name = [
        'requestId'   => 'RequestId',
        'hostDevices' => 'HostDevices',
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
        if (null !== $this->hostDevices) {
            $res['HostDevices'] = null !== $this->hostDevices ? $this->hostDevices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HostDevices'])) {
            $model->hostDevices = hostDevices::fromMap($map['HostDevices']);
        }

        return $model;
    }
}
