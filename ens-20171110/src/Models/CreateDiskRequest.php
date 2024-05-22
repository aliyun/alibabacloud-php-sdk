<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateDiskRequest extends Model
{
    /**
     * @description The category of the disk. Valid values:
     *
     *   cloud_efficiency: ultra disk.
     *   cloud_ssd: all-flash disk.
     *
     * This parameter is required.
     * @example cloud_efficiency
     *
     * @var string
     */
    public $category;

    /**
     * @description The name of the disk.
     *
     * @example yourDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description Specifies whether to encrypt the new system disk. Valid values:
     *
     *   **true**
     *   **false** (default): no
     *
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description The ID of the edge node.
     *
     * This parameter is required.
     * @example cn-chengdu-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The billing method of the instance. Set the value to **PostPaid**.
     *
     * This parameter is required.
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The ID of the Key Management Service (KMS) key that is used by the cloud disk.
     *
     * >  If you set the **Encrypted** parameter to **true**, the default service key is used when the **KMSKeyId** parameter is empty.
     * @example 0e478b7a-4262-4802-b8cb-00d3fxxxxx
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The size of the disk. Unit: GiB.
     *
     * @example 20
     *
     * @var string
     */
    public $size;

    /**
     * @description The ID of the snapshot that you want to use to create the disk.
     *
     * The following limits apply to the **SnapshotId** and **Size** parameters:
     *
     *   If the size of the snapshot specified by **SnapshotId** is greater than the specified **Size** value, the size of the created disk is equal to the specified snapshot size.
     *   If the size of the snapshot specified by **SnapshotId** is smaller than the specified **Size** value, the size of the created disk is equal to the specified **Size** value.
     *
     * @example s-897654321****
     *
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'category'           => 'Category',
        'diskName'           => 'DiskName',
        'encrypted'          => 'Encrypted',
        'ensRegionId'        => 'EnsRegionId',
        'instanceChargeType' => 'InstanceChargeType',
        'KMSKeyId'           => 'KMSKeyId',
        'size'               => 'Size',
        'snapshotId'         => 'SnapshotId',
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
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
