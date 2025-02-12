<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetPoolResponseBody\poolInfo;

class GetPoolResponseBody extends Model
{
    /**
     * @var poolInfo
     */
    public $poolInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'poolInfo'  => 'PoolInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->poolInfo) {
            $this->poolInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->poolInfo) {
            $res['PoolInfo'] = null !== $this->poolInfo ? $this->poolInfo->toArray($noStream) : $this->poolInfo;
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
        if (isset($map['PoolInfo'])) {
            $model->poolInfo = poolInfo::fromMap($map['PoolInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
