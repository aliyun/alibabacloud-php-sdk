<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImagesResponseBody\customImages\tags;

class customImages extends Model
{
    /**
     * @var string[]
     */
    public $createInstances;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $dataSnapshotId;
    /**
     * @var string
     */
    public $dataSnapshotName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var bool
     */
    public $inShare;
    /**
     * @var bool
     */
    public $inShareUser;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $osType;
    /**
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
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $systemSnapshotId;
    /**
     * @var string
     */
    public $systemSnapshotName;
    /**
     * @var tags[]
     */
    public $tags;
    /**
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
        if (\is_array($this->createInstances)) {
            Model::validateArray($this->createInstances);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createInstances) {
            if (\is_array($this->createInstances)) {
                $res['CreateInstances'] = [];
                $n1                     = 0;
                foreach ($this->createInstances as $item1) {
                    $res['CreateInstances'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CreateInstances'])) {
            if (!empty($map['CreateInstances'])) {
                $model->createInstances = [];
                $n1                     = 0;
                foreach ($map['CreateInstances'] as $item1) {
                    $model->createInstances[$n1++] = $item1;
                }
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
