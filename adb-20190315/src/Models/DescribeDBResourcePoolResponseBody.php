<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourcePoolResponseBody\poolsInfo;
use AlibabaCloud\Tea\Model;

class DescribeDBResourcePoolResponseBody extends Model
{
    /**
     * @var poolsInfo[]
     */
    public $poolsInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'poolsInfo' => 'PoolsInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->poolsInfo) {
            $res['PoolsInfo'] = [];
            if (null !== $this->poolsInfo && \is_array($this->poolsInfo)) {
                $n = 0;
                foreach ($this->poolsInfo as $item) {
                    $res['PoolsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDBResourcePoolResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoolsInfo'])) {
            if (!empty($map['PoolsInfo'])) {
                $model->poolsInfo = [];
                $n                = 0;
                foreach ($map['PoolsInfo'] as $item) {
                    $model->poolsInfo[$n++] = null !== $item ? poolsInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
