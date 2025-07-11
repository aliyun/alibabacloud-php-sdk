<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetClusterResponseBody;

use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetClusterResponseBody\data\vSwitches;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example xxljob-e0d018c6df8
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example xxl-job-test-1730427575152
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example scx.small.x2
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @example 2024-10-29 15:56:36
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2024-10-29 15:56:36
     *
     * @var string
     */
    public $endTime;

    /**
     * @example xxljob
     *
     * @var string
     */
    public $engineType;

    /**
     * @example 2.0.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $internetDomain;

    /**
     * @example http://xxljob-xxxxxx.schedulerx.mse.aliyuncs.com
     *
     * @var string
     */
    public $intranetDomain;

    /**
     * @example 100
     *
     * @var int
     */
    public $jobNum;

    /**
     * @example {
     * "vSwitchIdList": [
     * "xxx",
     * "xxx"
     * ],
     * "cpu": xxx,
     * "cpuUnit": "xxx",
     * "diskCapacity": xxx,
     * "memoryCapacity": xxx,
     * "zoneIds": [
     * "xxx",
     * "xxx"
     * ],
     * "securityGroupList": [
     * "xxx"
     * ],
     * "eniCrossZone": "xxx",
     * "regionId": "xxx",
     * "instanceCount": xxx,
     * "vpcId": "xxx",
     * "memoryUnit": "xxx",
     * "diskType": "xxx",
     * "appClusterId": "xxx"
     * }
     *
     * @var string
     */
    public $kubeConfig;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxJobNum;

    /**
     * @example 2
     *
     * @var int
     */
    public $productType;

    /**
     * @example 10
     *
     * @var int
     */
    public $spm;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var vSwitches[]
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $versionLifecycle;

    /**
     * @description VPC ID
     *
     * @example vpc-bp1fiz967u39lt8yuxcs0
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example 10
     *
     * @var int
     */
    public $workerNum;

    /**
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'clusterSpec' => 'ClusterSpec',
        'createTime' => 'CreateTime',
        'endTime' => 'EndTime',
        'engineType' => 'EngineType',
        'engineVersion' => 'EngineVersion',
        'internetDomain' => 'InternetDomain',
        'intranetDomain' => 'IntranetDomain',
        'jobNum' => 'JobNum',
        'kubeConfig' => 'KubeConfig',
        'maxJobNum' => 'MaxJobNum',
        'productType' => 'ProductType',
        'spm' => 'Spm',
        'status' => 'Status',
        'tags' => 'Tags',
        'vSwitches' => 'VSwitches',
        'versionLifecycle' => 'VersionLifecycle',
        'vpcId' => 'VpcId',
        'workerNum' => 'WorkerNum',
        'zones' => 'Zones',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = $this->clusterSpec;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->internetDomain) {
            $res['InternetDomain'] = $this->internetDomain;
        }
        if (null !== $this->intranetDomain) {
            $res['IntranetDomain'] = $this->intranetDomain;
        }
        if (null !== $this->jobNum) {
            $res['JobNum'] = $this->jobNum;
        }
        if (null !== $this->kubeConfig) {
            $res['KubeConfig'] = $this->kubeConfig;
        }
        if (null !== $this->maxJobNum) {
            $res['MaxJobNum'] = $this->maxJobNum;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->spm) {
            $res['Spm'] = $this->spm;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = [];
            if (null !== $this->vSwitches && \is_array($this->vSwitches)) {
                $n = 0;
                foreach ($this->vSwitches as $item) {
                    $res['VSwitches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->versionLifecycle) {
            $res['VersionLifecycle'] = $this->versionLifecycle;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->workerNum) {
            $res['WorkerNum'] = $this->workerNum;
        }
        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = $map['ClusterSpec'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InternetDomain'])) {
            $model->internetDomain = $map['InternetDomain'];
        }
        if (isset($map['IntranetDomain'])) {
            $model->intranetDomain = $map['IntranetDomain'];
        }
        if (isset($map['JobNum'])) {
            $model->jobNum = $map['JobNum'];
        }
        if (isset($map['KubeConfig'])) {
            $model->kubeConfig = $map['KubeConfig'];
        }
        if (isset($map['MaxJobNum'])) {
            $model->maxJobNum = $map['MaxJobNum'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Spm'])) {
            $model->spm = $map['Spm'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n = 0;
                foreach ($map['VSwitches'] as $item) {
                    $model->vSwitches[$n++] = null !== $item ? vSwitches::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VersionLifecycle'])) {
            $model->versionLifecycle = $map['VersionLifecycle'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WorkerNum'])) {
            $model->workerNum = $map['WorkerNum'];
        }
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = $map['Zones'];
            }
        }

        return $model;
    }
}
