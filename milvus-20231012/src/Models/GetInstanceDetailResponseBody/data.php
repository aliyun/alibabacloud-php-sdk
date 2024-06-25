<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody;

use AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data\clusterInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example acl-123xxx
     *
     * @var string
     */
    public $aclId;

    /**
     * @example 1716863508000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example milvus-test
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example https://oss.console.aliyun.com/bucket/oss-cn-beijing/xxxx/object?spm=a2cug.25127996.0.0.577990370Ebsqt&path=milvus-c-123xxxx
     *
     * @var string
     */
    public $bucketPath;

    /**
     * @var clusterInfo
     */
    public $clusterInfo;

    /**
     * @example aliyun-test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example 1721664000000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example c-123xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example running
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example true
     *
     * @var bool
     */
    public $openPublicNet;

    /**
     * @example standard
     *
     * @var string
     */
    public $packageType;

    /**
     * @example 1
     *
     * @var int
     */
    public $payType;

    /**
     * @example milvus_milvuspre_public_cn
     *
     * @var string
     */
    public $productCode;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1743679
     *
     * @var int
     */
    public $runningTime;

    /**
     * @example sg-123xxx
     *
     * @var string
     */
    public $sgId;

    /**
     * @example 2.4.1-1.0-0.0.1
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @example dataCoord:\\n  segment:\\n    maxSize: 1024
     *
     * @var string
     */
    public $userConfig;

    /**
     * @example 2.4
     *
     * @var string
     */
    public $version;

    /**
     * @example vpc-123xxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-123xxx
     *
     * @var string
     */
    public $vswId;

    /**
     * @example cn-beijing-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aclId'           => 'AclId',
        'beginTime'       => 'BeginTime',
        'bucketName'      => 'BucketName',
        'bucketPath'      => 'BucketPath',
        'clusterInfo'     => 'ClusterInfo',
        'clusterName'     => 'ClusterName',
        'expireTime'      => 'ExpireTime',
        'instanceId'      => 'InstanceId',
        'instanceStatus'  => 'InstanceStatus',
        'openPublicNet'   => 'OpenPublicNet',
        'packageType'     => 'PackageType',
        'payType'         => 'PayType',
        'productCode'     => 'ProductCode',
        'regionId'        => 'RegionId',
        'runningTime'     => 'RunningTime',
        'sgId'            => 'SgId',
        'templateVersion' => 'TemplateVersion',
        'userConfig'      => 'UserConfig',
        'version'         => 'Version',
        'vpcId'           => 'VpcId',
        'vswId'           => 'VswId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ClusterInfo'] = null !== $this->clusterInfo ? $this->clusterInfo->toMap() : null;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
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
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->sgId) {
            $res['SgId'] = $this->sgId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->userConfig) {
            $res['UserConfig'] = $this->userConfig;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
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
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['SgId'])) {
            $model->sgId = $map['SgId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['UserConfig'])) {
            $model->userConfig = $map['UserConfig'];
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
