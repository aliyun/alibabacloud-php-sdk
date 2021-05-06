<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourcePoolResponseBody\poolsInfo;
use AlibabaCloud\Tea\Model;

class DescribeDBResourcePoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var poolsInfo[]
     */
    public $poolsInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'poolsInfo' => 'PoolsInfo',
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
        if (null !== $this->poolsInfo) {
            $res['PoolsInfo'] = [];
            if (null !== $this->poolsInfo && \is_array($this->poolsInfo)) {
                $n = 0;
                foreach ($this->poolsInfo as $item) {
                    $res['PoolsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBResourcePoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PoolsInfo'])) {
            if (!empty($map['PoolsInfo'])) {
                $model->poolsInfo = [];
                $n                = 0;
                foreach ($map['PoolsInfo'] as $item) {
                    $model->poolsInfo[$n++] = null !== $item ? poolsInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
