<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImagesResponseBody;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImagesResponseBody\customImages\tags;
use AlibabaCloud\Tea\Model;

class customImages extends Model
{
    /**
     * @description The Information about instances created using the image.
     *
     * @var string[]
     */
    public $createInstances;

    /**
     * @description The time when the snapshot was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is in UTC.
     *
     * @example 2022-10-09T02:28:06Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the data disk snapshot.
     *
     * @example s-bp19rn9u8eqzlfb***
     *
     * @var string
     */
    public $dataSnapshotId;

    /**
     * @description The name of the data disk snapshot.
     *
     * @example data disk snapshot
     *
     * @var string
     */
    public $dataSnapshotName;

    /**
     * @description The description of the custom image.
     *
     * @example test-custom-image
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the custom image.
     *
     * @example m-bp1e79zktg26n2b***
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Indicates whether the custom image is shared to Elastic Compute Service (ECS).
     *
     * @example false
     *
     * @var bool
     */
    public $inShare;

    /**
     * @description Whether the custom image is cross-account shared.
     *
     * @example False
     *
     * @var bool
     */
    public $inShareUser;

    /**
     * @description The ID of the simple application server.
     *
     * @example 2d06ee0520b44de1ae88d4be****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the simple application server.
     *
     * @example swas-asdf23***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The name of the custom image.
     *
     * @example hua
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the operating system.
     *
     * Valid values:
     *
     *   Linux
     *
     * <!-- -->
     *
     *   Windows
     *
     * <!-- -->
     * @example Linux
     *
     * @var string
     */
    public $osType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $requiredDataDiskSize;

    /**
     * @var int
     */
    public $requiredSystemDiskSize;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm2h2lvp3ublq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sourceImageName;

    /**
     * @var string
     */
    public $sourceImageVersion;

    /**
     * @description The status of the custom image.
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the system disk snapshot.
     *
     * @example s-bp1h173hj21puxb***
     *
     * @var string
     */
    public $systemSnapshotId;

    /**
     * @description The name of the system disk snapshot.
     *
     * @example system disk snapshot
     *
     * @var string
     */
    public $systemSnapshotName;

    /**
     * @description The tags of the custom image.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The Primary Alibaba Cloud account ID of the image owner.
     *
     * @example 180185828710****
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'createInstances'        => 'CreateInstances',
        'creationTime'           => 'CreationTime',
        'dataSnapshotId'         => 'DataSnapshotId',
        'dataSnapshotName'       => 'DataSnapshotName',
        'description'            => 'Description',
        'imageId'                => 'ImageId',
        'inShare'                => 'InShare',
        'inShareUser'            => 'InShareUser',
        'instanceId'             => 'InstanceId',
        'instanceName'           => 'InstanceName',
        'name'                   => 'Name',
        'osType'                 => 'OsType',
        'regionId'               => 'RegionId',
        'requiredDataDiskSize'   => 'RequiredDataDiskSize',
        'requiredSystemDiskSize' => 'RequiredSystemDiskSize',
        'resourceGroupId'        => 'ResourceGroupId',
        'sourceImageName'        => 'SourceImageName',
        'sourceImageVersion'     => 'SourceImageVersion',
        'status'                 => 'Status',
        'systemSnapshotId'       => 'SystemSnapshotId',
        'systemSnapshotName'     => 'SystemSnapshotName',
        'tags'                   => 'Tags',
        'userId'                 => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createInstances) {
            $res['CreateInstances'] = $this->createInstances;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dataSnapshotId) {
            $res['DataSnapshotId'] = $this->dataSnapshotId;
        }
        if (null !== $this->dataSnapshotName) {
            $res['DataSnapshotName'] = $this->dataSnapshotName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->inShare) {
            $res['InShare'] = $this->inShare;
        }
        if (null !== $this->inShareUser) {
            $res['InShareUser'] = $this->inShareUser;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requiredDataDiskSize) {
            $res['RequiredDataDiskSize'] = $this->requiredDataDiskSize;
        }
        if (null !== $this->requiredSystemDiskSize) {
            $res['RequiredSystemDiskSize'] = $this->requiredSystemDiskSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceImageName) {
            $res['SourceImageName'] = $this->sourceImageName;
        }
        if (null !== $this->sourceImageVersion) {
            $res['SourceImageVersion'] = $this->sourceImageVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->systemSnapshotId) {
            $res['SystemSnapshotId'] = $this->systemSnapshotId;
        }
        if (null !== $this->systemSnapshotName) {
            $res['SystemSnapshotName'] = $this->systemSnapshotName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateInstances'])) {
            if (!empty($map['CreateInstances'])) {
                $model->createInstances = $map['CreateInstances'];
            }
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DataSnapshotId'])) {
            $model->dataSnapshotId = $map['DataSnapshotId'];
        }
        if (isset($map['DataSnapshotName'])) {
            $model->dataSnapshotName = $map['DataSnapshotName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InShare'])) {
            $model->inShare = $map['InShare'];
        }
        if (isset($map['InShareUser'])) {
            $model->inShareUser = $map['InShareUser'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequiredDataDiskSize'])) {
            $model->requiredDataDiskSize = $map['RequiredDataDiskSize'];
        }
        if (isset($map['RequiredSystemDiskSize'])) {
            $model->requiredSystemDiskSize = $map['RequiredSystemDiskSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceImageName'])) {
            $model->sourceImageName = $map['SourceImageName'];
        }
        if (isset($map['SourceImageVersion'])) {
            $model->sourceImageVersion = $map['SourceImageVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SystemSnapshotId'])) {
            $model->systemSnapshotId = $map['SystemSnapshotId'];
        }
        if (isset($map['SystemSnapshotName'])) {
            $model->systemSnapshotName = $map['SystemSnapshotName'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
