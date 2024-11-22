<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeResourcesResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $archiveDataSize;

    /**
     * @example 0
     *
     * @var int
     */
    public $checkFailedCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $coldArchiveDataSize;

    /**
     * @example 1697798340
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @example 0
     *
     * @var bool
     */
    public $enableCheck;

    /**
     * @example 0
     *
     * @var int
     */
    public $iaDataSize;

    /**
     * @example ecs
     *
     * @var string
     */
    public $productType;

    /**
     * @example 0
     *
     * @var int
     */
    public $protectionScore;

    /**
     * @example 0
     *
     * @var int
     */
    public $protectionScoreUpdatedTime;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example acs:ecs:cn-hangzhou:xxxxxxxx:instance/xxxxx
     *
     * @var string
     */
    public $resourceArn;

    /**
     * @example i-xxxxxxxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example test server
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 0
     *
     * @var int
     */
    public $riskCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $standardDataSize;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalDataSize;

    /**
     * @description vSwitch ID
     *
     * @example vsw-xxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description vpc ID
     *
     * @example vpc-xxxxxxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'archiveDataSize'            => 'ArchiveDataSize',
        'checkFailedCount'           => 'CheckFailedCount',
        'coldArchiveDataSize'        => 'ColdArchiveDataSize',
        'createTime'                 => 'CreateTime',
        'dataRedundancyType'         => 'DataRedundancyType',
        'enableCheck'                => 'EnableCheck',
        'iaDataSize'                 => 'IaDataSize',
        'productType'                => 'ProductType',
        'protectionScore'            => 'ProtectionScore',
        'protectionScoreUpdatedTime' => 'ProtectionScoreUpdatedTime',
        'regionId'                   => 'RegionId',
        'resourceArn'                => 'ResourceArn',
        'resourceId'                 => 'ResourceId',
        'resourceName'               => 'ResourceName',
        'resourceType'               => 'ResourceType',
        'riskCount'                  => 'RiskCount',
        'standardDataSize'           => 'StandardDataSize',
        'status'                     => 'Status',
        'storageClass'               => 'StorageClass',
        'totalDataSize'              => 'TotalDataSize',
        'vSwitchId'                  => 'VSwitchId',
        'vpcId'                      => 'VpcId',
        'zoneId'                     => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveDataSize) {
            $res['ArchiveDataSize'] = $this->archiveDataSize;
        }
        if (null !== $this->checkFailedCount) {
            $res['CheckFailedCount'] = $this->checkFailedCount;
        }
        if (null !== $this->coldArchiveDataSize) {
            $res['ColdArchiveDataSize'] = $this->coldArchiveDataSize;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataRedundancyType) {
            $res['DataRedundancyType'] = $this->dataRedundancyType;
        }
        if (null !== $this->enableCheck) {
            $res['EnableCheck'] = $this->enableCheck;
        }
        if (null !== $this->iaDataSize) {
            $res['IaDataSize'] = $this->iaDataSize;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->protectionScore) {
            $res['ProtectionScore'] = $this->protectionScore;
        }
        if (null !== $this->protectionScoreUpdatedTime) {
            $res['ProtectionScoreUpdatedTime'] = $this->protectionScoreUpdatedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->standardDataSize) {
            $res['StandardDataSize'] = $this->standardDataSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->totalDataSize) {
            $res['TotalDataSize'] = $this->totalDataSize;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveDataSize'])) {
            $model->archiveDataSize = $map['ArchiveDataSize'];
        }
        if (isset($map['CheckFailedCount'])) {
            $model->checkFailedCount = $map['CheckFailedCount'];
        }
        if (isset($map['ColdArchiveDataSize'])) {
            $model->coldArchiveDataSize = $map['ColdArchiveDataSize'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataRedundancyType'])) {
            $model->dataRedundancyType = $map['DataRedundancyType'];
        }
        if (isset($map['EnableCheck'])) {
            $model->enableCheck = $map['EnableCheck'];
        }
        if (isset($map['IaDataSize'])) {
            $model->iaDataSize = $map['IaDataSize'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['ProtectionScore'])) {
            $model->protectionScore = $map['ProtectionScore'];
        }
        if (isset($map['ProtectionScoreUpdatedTime'])) {
            $model->protectionScoreUpdatedTime = $map['ProtectionScoreUpdatedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['StandardDataSize'])) {
            $model->standardDataSize = $map['StandardDataSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['TotalDataSize'])) {
            $model->totalDataSize = $map['TotalDataSize'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
