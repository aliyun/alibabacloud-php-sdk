<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListEdgeDevicesResponseBody\edgeDevices;
use AlibabaCloud\Tea\Model;

class ListEdgeDevicesResponseBody extends Model
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
     * @var edgeDevices
     */
    public $edgeDevices;
    protected $_name = [
        'requestId'   => 'RequestId',
        'edgeDevices' => 'EdgeDevices',
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
        if (null !== $this->edgeDevices) {
            $res['EdgeDevices'] = null !== $this->edgeDevices ? $this->edgeDevices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEdgeDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EdgeDevices'])) {
            $model->edgeDevices = edgeDevices::fromMap($map['EdgeDevices']);
        }

        return $model;
    }
}
