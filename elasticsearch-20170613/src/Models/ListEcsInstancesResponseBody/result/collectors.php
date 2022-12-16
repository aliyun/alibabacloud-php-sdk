<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result\collectors\configs;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListEcsInstancesResponseBody\result\collectors\extendConfigs;
use AlibabaCloud\Tea\Model;

class collectors extends Model
{
    /**
     * @var string[]
     */
    public $collectorPaths;

    /**
     * @var configs[]
     */
    public $configs;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var extendConfigs[]
     */
    public $extendConfigs;

    /**
     * @example 2020-06-20T07:26:47.000+0000
     *
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @example 2020-06-20T07:26:47.000+0000
     *
     * @var string
     */
    public $gmtUpdateTime;

    /**
     * @example ct-testAbc
     *
     * @var string
     */
    public $name;

    /**
     * @example 16852***488*****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example ct-cn-0v3xj86085dvq****
     *
     * @var string
     */
    public $resId;

    /**
     * @example fileBeat
     *
     * @var string
     */
    public $resType;

    /**
     * @example 6.8.5_with_community
     *
     * @var string
     */
    public $resVersion;

    /**
     * @example activing
     *
     * @var string
     */
    public $status;

    /**
     * @example vpc-bp16k1dvzxtm******
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
     * @return collectors
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
