<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetClusterResponseBody\data\vSwitches;

class data extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterSpec;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $internetDomain;

    /**
     * @var string
     */
    public $intranetDomain;

    /**
     * @var int
     */
    public $jobNum;

    /**
     * @var string
     */
    public $kubeConfig;

    /**
     * @var int
     */
    public $maxJobNum;

    /**
     * @var int
     */
    public $productType;

    /**
     * @var int
     */
    public $spm;

    /**
     * @var int
     */
    public $status;

    /**
     * @var vSwitches[]
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $versionLifecycle;

    /**
     * @var string
     */
    public $vpcId;

    /**
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
        'vSwitches' => 'VSwitches',
        'versionLifecycle' => 'VersionLifecycle',
        'vpcId' => 'VpcId',
        'workerNum' => 'WorkerNum',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitches)) {
            Model::validateArray($this->vSwitches);
        }
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->vSwitches) {
            if (\is_array($this->vSwitches)) {
                $res['VSwitches'] = [];
                $n1 = 0;
                foreach ($this->vSwitches as $item1) {
                    $res['VSwitches'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n1 = 0;
                foreach ($map['VSwitches'] as $item1) {
                    $model->vSwitches[$n1++] = vSwitches::fromMap($item1);
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
                $model->zones = [];
                $n1 = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
