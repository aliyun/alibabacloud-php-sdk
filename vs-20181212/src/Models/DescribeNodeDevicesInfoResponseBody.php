<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeNodeDevicesInfoResponseBody\nodeDevices;
use AlibabaCloud\Tea\Model;

class DescribeNodeDevicesInfoResponseBody extends Model
{
    /**
     * @var nodeDevices[]
     */
    public $nodeDevices;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodeDevices' => 'NodeDevices',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeDevices) {
            $res['NodeDevices'] = [];
            if (null !== $this->nodeDevices && \is_array($this->nodeDevices)) {
                $n = 0;
                foreach ($this->nodeDevices as $item) {
                    $res['NodeDevices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNodeDevicesInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeDevices'])) {
            if (!empty($map['NodeDevices'])) {
                $model->nodeDevices = [];
                $n                  = 0;
                foreach ($map['NodeDevices'] as $item) {
                    $model->nodeDevices[$n++] = null !== $item ? nodeDevices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
