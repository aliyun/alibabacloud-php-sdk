<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorNameResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorNameResponseBody\result\configs;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateCollectorNameResponseBody\result\extendConfigs;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $collectorPaths;

    /**
     * @description The information about the configuration file of the shipper.
     *
     * @var configs[]
     */
    public $configs;

    /**
     * @description Indicates whether a dry run is performed. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The extended configurations of the shipper.
     *
     * @var extendConfigs[]
     */
    public $extendConfigs;

    /**
     * @description The time when the shipper was created.
     *
     * @example 2020-06-20T07:26:47.000+0000
     *
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @description The time when the shipper was updated.
     *
     * @example 2020-06-20T07:26:47.000+0000
     *
     * @var string
     */
    public $gmtUpdateTime;

    /**
     * @description The name of the shipper.
     *
     * @example ct-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The account ID.
     *
     * @example 16852099488*****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The ID of the shipper.
     *
     * @example ct-cn-77uqof2s7rg5c****
     *
     * @var string
     */
    public $resId;

    /**
     * @description The type of the shipper. Valid values: fileBeat, metricBeat, heartBeat, and audiBeat.
     *
     * @example fileBeat
     *
     * @var string
     */
    public $resType;

    /**
     * @description The version of the shipper. The version of a shipper depends on the type of the machine on which the shipper is deployed.
     *
     *   Elastic Compute Service (ECS) instance: 6.8.5_with_community
     *   Container Service for Kubernetes (ACK) cluster: 6.8.13_with_community
     *
     * @example 6.8.5_with_community
     *
     * @var string
     */
    public $resVersion;

    /**
     * @description The status of the shipper. Valid values: activating and active.
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the virtual private cloud (VPC) where the shipper resides.
     *
     * @example vpc-bp16k1dvzxtma*****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'collectorPaths' => 'collectorPaths',
        'configs'        => 'configs',
        'dryRun'         => 'dryRun',
        'extendConfigs'  => 'extendConfigs',
        'gmtCreatedTime' => 'gmtCreatedTime',
        'gmtUpdateTime'  => 'gmtUpdateTime',
        'name'           => 'name',
        'ownerId'        => 'ownerId',
        'resId'          => 'resId',
        'resType'        => 'resType',
        'resVersion'     => 'resVersion',
        'status'         => 'status',
        'vpcId'          => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectorPaths) {
            $res['collectorPaths'] = $this->collectorPaths;
        }
        if (null !== $this->configs) {
            $res['configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }
        if (null !== $this->extendConfigs) {
            $res['extendConfigs'] = [];
            if (null !== $this->extendConfigs && \is_array($this->extendConfigs)) {
                $n = 0;
                foreach ($this->extendConfigs as $item) {
                    $res['extendConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreatedTime) {
            $res['gmtCreatedTime'] = $this->gmtCreatedTime;
        }
        if (null !== $this->gmtUpdateTime) {
            $res['gmtUpdateTime'] = $this->gmtUpdateTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
        }
        if (null !== $this->resId) {
            $res['resId'] = $this->resId;
        }
        if (null !== $this->resType) {
            $res['resType'] = $this->resType;
        }
        if (null !== $this->resVersion) {
            $res['resVersion'] = $this->resVersion;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['collectorPaths'])) {
            if (!empty($map['collectorPaths'])) {
                $model->collectorPaths = $map['collectorPaths'];
            }
        }
        if (isset($map['configs'])) {
            if (!empty($map['configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }
        if (isset($map['extendConfigs'])) {
            if (!empty($map['extendConfigs'])) {
                $model->extendConfigs = [];
                $n                    = 0;
                foreach ($map['extendConfigs'] as $item) {
                    $model->extendConfigs[$n++] = null !== $item ? extendConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['gmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['gmtCreatedTime'];
        }
        if (isset($map['gmtUpdateTime'])) {
            $model->gmtUpdateTime = $map['gmtUpdateTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
        }
        if (isset($map['resId'])) {
            $model->resId = $map['resId'];
        }
        if (isset($map['resType'])) {
            $model->resType = $map['resType'];
        }
        if (isset($map['resVersion'])) {
            $model->resVersion = $map['resVersion'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
