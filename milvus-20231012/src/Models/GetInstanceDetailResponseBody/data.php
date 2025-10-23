<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data\clusterInfo;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data\measureConfig;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data\tags;
use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data\vSwitches;

class data extends Model
{
    /**
     * @var string
     */
    public $aclId;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $bucketPath;

    /**
     * @var clusterInfo
     */
    public $clusterInfo;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var bool
     */
    public $enableHa;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var measureConfig
     */
    public $measureConfig;

    /**
     * @var string
     */
    public $multiZoneMode;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var bool
     */
    public $openPublicNet;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var int
     */
    public $payType;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $runningTime;

    /**
     * @var string
     */
    public $sgId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $userConfig;

    /**
     * @var vSwitches[]
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aclId' => 'AclId',
        'beginTime' => 'BeginTime',
        'bucketName' => 'BucketName',
        'bucketPath' => 'BucketPath',
        'clusterInfo' => 'ClusterInfo',
        'clusterName' => 'ClusterName',
        'enableHa' => 'EnableHa',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'measureConfig' => 'MeasureConfig',
        'multiZoneMode' => 'MultiZoneMode',
        'nodeType' => 'NodeType',
        'openPublicNet' => 'OpenPublicNet',
        'packageType' => 'PackageType',
        'payType' => 'PayType',
        'productCode' => 'ProductCode',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'runningTime' => 'RunningTime',
        'sgId' => 'SgId',
        'tags' => 'Tags',
        'templateVersion' => 'TemplateVersion',
        'userConfig' => 'UserConfig',
        'vSwitches' => 'VSwitches',
        'version' => 'Version',
        'vpcId' => 'VpcId',
        'vswId' => 'VswId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->clusterInfo) {
            $this->clusterInfo->validate();
        }
        if (null !== $this->measureConfig) {
            $this->measureConfig->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->vSwitches)) {
            Model::validateArray($this->vSwitches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->bucketPath) {
            $res['BucketPath'] = $this->bucketPath;
        }

        if (null !== $this->clusterInfo) {
            $res['ClusterInfo'] = null !== $this->clusterInfo ? $this->clusterInfo->toArray($noStream) : $this->clusterInfo;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->enableHa) {
            $res['EnableHa'] = $this->enableHa;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->measureConfig) {
            $res['MeasureConfig'] = null !== $this->measureConfig ? $this->measureConfig->toArray($noStream) : $this->measureConfig;
        }

        if (null !== $this->multiZoneMode) {
            $res['MultiZoneMode'] = $this->multiZoneMode;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->openPublicNet) {
            $res['OpenPublicNet'] = $this->openPublicNet;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }

        if (null !== $this->sgId) {
            $res['SgId'] = $this->sgId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        if (null !== $this->userConfig) {
            $res['UserConfig'] = $this->userConfig;
        }

        if (null !== $this->vSwitches) {
            if (\is_array($this->vSwitches)) {
                $res['VSwitches'] = [];
                $n1 = 0;
                foreach ($this->vSwitches as $item1) {
                    $res['VSwitches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswId) {
            $res['VswId'] = $this->vswId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['BucketPath'])) {
            $model->bucketPath = $map['BucketPath'];
        }

        if (isset($map['ClusterInfo'])) {
            $model->clusterInfo = clusterInfo::fromMap($map['ClusterInfo']);
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['EnableHa'])) {
            $model->enableHa = $map['EnableHa'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['MeasureConfig'])) {
            $model->measureConfig = measureConfig::fromMap($map['MeasureConfig']);
        }

        if (isset($map['MultiZoneMode'])) {
            $model->multiZoneMode = $map['MultiZoneMode'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['OpenPublicNet'])) {
            $model->openPublicNet = $map['OpenPublicNet'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }

        if (isset($map['SgId'])) {
            $model->sgId = $map['SgId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        if (isset($map['UserConfig'])) {
            $model->userConfig = $map['UserConfig'];
        }

        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n1 = 0;
                foreach ($map['VSwitches'] as $item1) {
                    $model->vSwitches[$n1] = vSwitches::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswId'])) {
            $model->vswId = $map['VswId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
