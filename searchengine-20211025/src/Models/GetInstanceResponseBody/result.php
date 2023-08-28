<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponseBody\result\tags;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 付费类型
     *
     * @example POSYPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description 商品code
     *
     * @example commodityCode
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example 2022-06-17T02:01:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the request.
     *
     * @example ha3_test
     *
     * @var string
     */
    public $description;

    /**
     * @description WB01240825
     *
     * @example 1634609702
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description 是否欠费
     *
     * @example false
     *
     * @var bool
     */
    public $inDebt;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example ha-cn-7mz2qsgq301
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 锁定状态
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description ### Sample responses
     *
     **Sample success responses**
     *
     * }
     *
     **Sample error responses**
     *
     * }
     * @example rg-aekzjvw24el5lma
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example INIT
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @description 更新时间
     *
     * @example 1634609702
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
