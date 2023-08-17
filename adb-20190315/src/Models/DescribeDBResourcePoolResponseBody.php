<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourcePoolResponseBody\poolsInfo;
use AlibabaCloud\Tea\Model;

class DescribeDBResourcePoolResponseBody extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @example am-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Details of the resource group.
     *
     * @var poolsInfo[]
     */
    public $poolsInfo;

    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'poolsInfo'   => 'PoolsInfo',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
