<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponseBody\result\network;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponseBody\result\spec;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetInstanceResponseBody\result\tags;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The billing method.
     *
     * @example POSYPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The commodity code of the instance.
     *
     * @example commodityCode
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The time when the instance was created.
     *
     * @example 2022-06-17T02:01:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the instance.
     *
     * @example ha3_test
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $edition;

    /**
     * @description The time when the instance expires.
     *
     * @example 1634609702
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description Indicates whether an overdue payment is involved.
     *
     * @example false
     *
     * @var bool
     */
    public $inDebt;

    /**
     * @description The instance ID.
     *
     * @example ha-cn-7mz2qsgq301
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The lock status.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @var network
     */
    public $network;

    /**
     * @var bool
     */
    public $newMode;

    /**
     * @var bool
     */
    public $noQrs;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzjvw24el5lma
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var spec
     */
    public $spec;

    /**
     * @description The status of the instance. Valid values:
     *
     *   INIT: being initialized
     *   WAIT_CONFIG: to be configured
     *   CONFIG_UPDATING: configuration taking effect
     *   READY: normal
     *
     * @example INIT
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the instance.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The time when the instance was updated.
     *
     * @example 1634609702
     *
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'chargeType'      => 'chargeType',
        'commodityCode'   => 'commodityCode',
        'createTime'      => 'createTime',
        'description'     => 'description',
        'edition'         => 'edition',
        'expiredTime'     => 'expiredTime',
        'inDebt'          => 'inDebt',
        'instanceId'      => 'instanceId',
        'lockMode'        => 'lockMode',
        'network'         => 'network',
        'newMode'         => 'newMode',
        'noQrs'           => 'noQrs',
        'resourceGroupId' => 'resourceGroupId',
        'spec'            => 'spec',
        'status'          => 'status',
        'tags'            => 'tags',
        'updateTime'      => 'updateTime',
        'userName'        => 'userName',
        'version'         => 'version',
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
        if (null !== $this->edition) {
            $res['edition'] = $this->edition;
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
        if (null !== $this->newMode) {
            $res['newMode'] = $this->newMode;
        }
        if (null !== $this->noQrs) {
            $res['noQrs'] = $this->noQrs;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spec) {
            $res['spec'] = null !== $this->spec ? $this->spec->toMap() : null;
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
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['edition'])) {
            $model->edition = $map['edition'];
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
        if (isset($map['newMode'])) {
            $model->newMode = $map['newMode'];
        }
        if (isset($map['noQrs'])) {
            $model->noQrs = $map['noQrs'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['spec'])) {
            $model->spec = spec::fromMap($map['spec']);
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
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
