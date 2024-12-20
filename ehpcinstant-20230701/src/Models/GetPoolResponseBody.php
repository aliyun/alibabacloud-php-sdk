<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetPoolResponseBody\poolInfo;
use AlibabaCloud\Tea\Model;

class GetPoolResponseBody extends Model
{
    /**
     * @var poolInfo
     */
    public $poolInfo;

    /**
     * @description Id of the request
     *
     * @example 896D338C-E4F4-41EC-A154-D605E5DE****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'poolInfo'  => 'PoolInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->poolInfo) {
            $res['PoolInfo'] = null !== $this->poolInfo ? $this->poolInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPoolResponseBody
     */
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
