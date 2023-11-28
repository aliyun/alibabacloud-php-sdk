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
     * @description The content of the file.
     *
     * @var configs[]
     */
    public $configs;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Whether Monitoring is enabled. This field is displayed when the **configType** is **collectorTargetInstance** and the **instanceType** is **Elasticsearch**. Valid values:
     *
     *   true
     *   false
     *
     * @var extendConfigs[]
     */
    public $extendConfigs;

    /**
     * @description The status of the collector. Valid values:
     *
     *   activating: The project is taking effect.
     *   active: The instance has taken effect.
     *
     * @example 2020-06-20T07:26:47.000+0000
     *
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @description Specifies whether to verify and create a crawer. Valid values:
     *
     *   true: only verifies and does not create a
     *   false: verifies and creates a
     *
     * @example 2020-06-20T07:26:47.000+0000
     *
     * @var string
     */
    public $gmtUpdateTime;

    /**
     * @description The configuration file information of the collector.
     *
     * @example ct-testAbc
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the Virtual Private Cloud to which the collector belongs.
     *
     * @example 16852***488*****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The time when the collector was updated.
     *
     * @example ct-cn-0v3xj86085dvq****
     *
     * @var string
     */
    public $resId;

    /**
     * @description The version of the collector. If the machine type of the collector is ECS, only **6.8.5\_with_community** is supported.
     *
     * @example fileBeat
     *
     * @var string
     */
    public $resType;

    /**
     * @description The time when the crawl collector was created.
     *
     * @example 6.8.5_with_community
     *
     * @var string
     */
    public $resVersion;

    /**
     * @description The name of the collector.
     *
     * @example activing
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the collector. FileBeat, metricBeat, heartBeat, and auditBeat are supported.
     *
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
