<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result\network;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result\tags;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The total number of entries returned
     *
     * @example ""
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description Havenask instance
     *
     * @example 2022-06-04T02:03:21Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the virtual switch
     *
     * @example The billing method
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the Virtual Private Cloud (VPC) network
     *
     * @example 1634885083
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The ID of the request
     *
     * @example false
     *
     * @var bool
     */
    public $inDebt;

    /**
     * @description The access point of the gateway
     *
     * @example ha-cn-2r42n8oh001
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Emergency test
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The lock status
     *
     * @var network
     */
    public $network;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 50. Default value: 10.
     *
     * @example rg-aekzgpiswzbksdi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The expiration time
     *
     * @example 2
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @description The time when the instance was last updated
     *
     * @example 2018-12-06T11:17:49.0
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'chargeType'      => 'chargeType',
        'commodityCode'   => 'commodityCode',
        'createTime'      => 'createTime',
        'description'     => 'description',
        'expiredTime'     => 'expiredTime',
        'inDebt'          => 'inDebt',
        'instanceId'      => 'instanceId',
        'lockMode'        => 'lockMode',
        'network'         => 'network',
        'resourceGroupId' => 'resourceGroupId',
        'status'          => 'status',
        'tags'            => 'tags',
        'updateTime'      => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['expiredTime'] = $this->expiredTime;
        }
        if (null !== $this->inDebt) {
            $res['inDebt'] = $this->inDebt;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->lockMode) {
            $res['lockMode'] = $this->lockMode;
        }
        if (null !== $this->network) {
            $res['network'] = null !== $this->network ? $this->network->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['expiredTime'])) {
            $model->expiredTime = $map['expiredTime'];
        }
        if (isset($map['inDebt'])) {
            $model->inDebt = $map['inDebt'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['lockMode'])) {
            $model->lockMode = $map['lockMode'];
        }
        if (isset($map['network'])) {
            $model->network = network::fromMap($map['network']);
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
