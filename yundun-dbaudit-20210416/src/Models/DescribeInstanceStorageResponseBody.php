<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20210416\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeInstanceStorageResponseBody\instanceStorages;
use AlibabaCloud\Tea\Model;

class DescribeInstanceStorageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceStorages[]
     */
    public $instanceStorages;
    protected $_name = [
        'requestId'        => 'RequestId',
        'instanceStorages' => 'InstanceStorages',
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
        if (null !== $this->instanceStorages) {
            $res['InstanceStorages'] = [];
            if (null !== $this->instanceStorages && \is_array($this->instanceStorages)) {
                $n = 0;
                foreach ($this->instanceStorages as $item) {
                    $res['InstanceStorages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceStorageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceStorages'])) {
            if (!empty($map['InstanceStorages'])) {
                $model->instanceStorages = [];
                $n                       = 0;
                foreach ($map['InstanceStorages'] as $item) {
                    $model->instanceStorages[$n++] = null !== $item ? instanceStorages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
