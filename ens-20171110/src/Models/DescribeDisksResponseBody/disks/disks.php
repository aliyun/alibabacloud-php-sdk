<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksResponseBody\disks;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @description The category of the disk.
     *
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: all-flash disk.
     *   local_hdd: local HDD.
     *   local_ssd: local SSD.
     *
     * @example local_ssd
     *
     * @var string
     */
    public $category;

    /**
     * @description The time when the disk was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-11-11T14:34:55+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The billing method of the cloud disk or local disk. Valid values:
     *
     *   **prepaid**: subscription.
     *   **postpaid**: pay-as-you-go.
     *
     * @example prepaid
     *
     * @var string
     */
    public $diskChargeType;

    /**
     * @description The ID of the disk.
     *
     * @example d-5svum1dx1w4a4spr54lgr****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The name of the disk.
     *
     * @example fvt-ecs-5cf0****
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Indicates whether the cloud disk is encrypted. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example False
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used for the cloud disk.
     *
     * @example 05467897a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $encryptedKeyId;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-guangzhou-10
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the instance.
     *
     * @example i-5t77rb0yoz79m28ku60sx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Indicates whether the cloud disk or local disk is removable. Valid values:
     *
     *   true: The disk is removable. A removable disk can independently exist and can be attached to or detached from an instance within the same zone.
     *   false: The disk is not removable. A disk that is not removable cannot independently exist or be attached to or detached from an instance within the same zone.
     *
     * If disks are of the following categories or types, the **Portable** value is **false** and the disks have the same lifecycle as their attached instances:
     *
     *   Local HDDs
     *   Local SSDs
     *   Data disks that use the subscription billing method
     *
     * @example true
     *
     * @var bool
     */
    public $portable;

    /**
     * @description The serial number.
     *
     * @example 123
     *
     * @var string
     */
    public $serialId;

    /**
     * @description The size of the disk. Unit: MiB.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-bp67acfmxazb4p****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The status of the disk. Valid values:
     *
     *   In-use: The disk is in use.
     *   Available: The disk can be attached.
     *   Attaching: The disk is being attached.
     *   Detaching: The disk is being detached.
     *   Creating: The disk is being created.
     *   ReIniting: The disk is being reset.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the cloud disk or local disk. Valid values:
     *
     *   1: system disk.
     *   2: data disk.
     *
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'category'       => 'Category',
        'creationTime'   => 'CreationTime',
        'diskChargeType' => 'DiskChargeType',
        'diskId'         => 'DiskId',
        'diskName'       => 'DiskName',
        'encrypted'      => 'Encrypted',
        'encryptedKeyId' => 'EncryptedKeyId',
        'ensRegionId'    => 'EnsRegionId',
        'instanceId'     => 'InstanceId',
        'instanceName'   => 'InstanceName',
        'portable'       => 'Portable',
        'serialId'       => 'SerialId',
        'size'           => 'Size',
        'snapshotId'     => 'SnapshotId',
        'status'         => 'Status',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
