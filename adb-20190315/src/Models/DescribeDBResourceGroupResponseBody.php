<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBResourceGroupResponseBody\groupsInfo;
use AlibabaCloud\Tea\Model;

class DescribeDBResourceGroupResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example am-bp1ub9grke1****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Details of the resource group.
     *
     * @var groupsInfo[]
     */
    public $groupsInfo;

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
        'groupsInfo'  => 'GroupsInfo',
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
        if (null !== $this->groupsInfo) {
            $res['GroupsInfo'] = [];
            if (null !== $this->groupsInfo && \is_array($this->groupsInfo)) {
                $n = 0;
                foreach ($this->groupsInfo as $item) {
                    $res['GroupsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDBResourceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['GroupsInfo'])) {
            if (!empty($map['GroupsInfo'])) {
                $model->groupsInfo = [];
                $n                 = 0;
                foreach ($map['GroupsInfo'] as $item) {
                    $model->groupsInfo[$n++] = null !== $item ? groupsInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
