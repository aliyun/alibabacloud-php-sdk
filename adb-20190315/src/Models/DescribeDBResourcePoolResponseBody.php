<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourcePoolResponseBody\poolsInfo;

class DescribeDBResourcePoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var poolsInfo[]
     */
    public $poolsInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'poolsInfo' => 'PoolsInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->poolsInfo)) {
            Model::validateArray($this->poolsInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->poolsInfo) {
            if (\is_array($this->poolsInfo)) {
                $res['PoolsInfo'] = [];
                $n1 = 0;
                foreach ($this->poolsInfo as $item1) {
                    $res['PoolsInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['PoolsInfo'])) {
            if (!empty($map['PoolsInfo'])) {
                $model->poolsInfo = [];
                $n1 = 0;
                foreach ($map['PoolsInfo'] as $item1) {
                    $model->poolsInfo[$n1] = poolsInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
