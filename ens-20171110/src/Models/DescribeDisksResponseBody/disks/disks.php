<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksResponseBody\disks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksResponseBody\disks\disks\tags;

class disks extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $diskChargeType;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $diskName;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $encryptedKeyId;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var bool
     */
    public $portable;

    /**
     * @var string
     */
    public $serialId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'category' => 'Category',
        'creationTime' => 'CreationTime',
        'deleteWithInstance' => 'DeleteWithInstance',
        'description' => 'Description',
        'diskChargeType' => 'DiskChargeType',
        'diskId' => 'DiskId',
        'diskName' => 'DiskName',
        'encrypted' => 'Encrypted',
        'encryptedKeyId' => 'EncryptedKeyId',
        'ensRegionId' => 'EnsRegionId',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'portable' => 'Portable',
        'serialId' => 'SerialId',
        'size' => 'Size',
        'snapshotId' => 'SnapshotId',
        'status' => 'Status',
        'tags' => 'Tags',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->diskChargeType) {
            $res['DiskChargeType'] = $this->diskChargeType;
        }

        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }

        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }

        if (null !== $this->encryptedKeyId) {
            $res['EncryptedKeyId'] = $this->encryptedKeyId;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->portable) {
            $res['Portable'] = $this->portable;
        }

        if (null !== $this->serialId) {
            $res['SerialId'] = $this->serialId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiskChargeType'])) {
            $model->diskChargeType = $map['DiskChargeType'];
        }

        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }

        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }

        if (isset($map['EncryptedKeyId'])) {
            $model->encryptedKeyId = $map['EncryptedKeyId'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Portable'])) {
            $model->portable = $map['Portable'];
        }

        if (isset($map['SerialId'])) {
            $model->serialId = $map['SerialId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
