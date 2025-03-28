<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\ldap;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\options;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\packages;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\supportedFeatures;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\tags;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\vswIds;
use AlibabaCloud\Tea\Model;

class fileSystem extends Model
{
    /**
     * @description Number of access points.
     *
     * @example 1
     *
     * @var string
     */
    public $accessPointCount;

    /**
     * @description The ID of the automatic snapshot policy.
     *
     * @example sp-extreme-233e6****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description The bandwidth of the file system.
     *
     * Unit: MB/s. This parameter is unavailable for General-purpose NAS file systems.
     *
     * @example 150
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The capacity of the file system.
     *
     * Unit: GiB.
     *
     * @example 100
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The billing method.
     *
     * Valid values:
     * - Subscription: The subscription billing method is used.
     * - PayAsYouGo: The pay-as-you-go billing method is used.
     * - Package: A storage plan is attached to the file system.
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the file system was created.
     *
     * @example 2020-01-05T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the file system.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The encryption type.
     *
     * Valid values:
     *
     *   0: The data in the file system is not encrypted.
     *   1: A NAS-managed key is used to encrypt the data in the file system.
     *   2: A KMS-managed key is used to encrypt the data in the file system.
     *
     * @example 1
     *
     * @var int
     */
    public $encryptType;

    /**
     * @description The time when the file system expires.
     *
     * @example 2020-01-05T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The ID of the file system.
     *
     * @example 109c04****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The type of the file system.
     *
     * Valid values:
     * - standard: General-purpose NAS file system
     * - extreme: Extreme NAS file system
     * - cpfs: CPFS file system
     * > CPFS file systems are available only on the China site (aliyun.com).
     *
     * @example standard
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The ID of the key that is managed by Key Management Service (KMS).
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The Lightweight Directory Access Protocol (LDAP) configurations.
     *
     * This parameter is available only for CPFS file systems.
     *
     * @var ldap
     */
    public $ldap;

    /**
     * @description Archive storage usage.
     *
     * Unit: Byte.
     *
     * @example 1611661312
     *
     * @var int
     */
    public $meteredArchiveSize;

    /**
     * @description The storage usage of the Infrequent Access (IA) storage medium.
     *
     * Unit: bytes.
     *
     * @example 362832
     *
     * @var int
     */
    public $meteredIASize;

    /**
     * @description The storage usage of the file system.
     *
     * The value of this parameter is the maximum storage usage of the file system over the last hour. Unit: bytes.
     *
     * @example 1611661312
     *
     * @var int
     */
    public $meteredSize;

    /**
     * @description The information about mount targets.
     *
     * @var mountTargets
     */
    public $mountTargets;

    /**
     * @description The options.
     *
     * @var options
     */
    public $options;

    /**
     * @description The information about storage plans.
     *
     * @var packages
     */
    public $packages;

    /**
     * @description The protocol type of the file system.
     *
     * Valid values:
     *
     *   NFS: Network File System (NFS)
     *   SMB: Server Message Block (SMB)
     *   cpfs: the protocol type supported by the CPFS file system
     *
     * > CPFS file systems are available only on the China site (aliyun.com).
     *
     * @example NFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-2ze37k6jh8ums2fw2****
     *
     * @var string
     */
    public $quorumVswId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * You can log on to the [Resource Management console](https://resourcemanager.console.aliyun.com/resource-groups?) to view resource group IDs.
     *
     * @example rg-acfmwavnfdf****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $secondaryBandwidth;

    /**
     * @var int
     */
    public $secondaryCapacity;

    /**
     * @description The status of the file system. Valid values:
     * - Pending: The file system is being created or modified.
     * - Running: The file system is available. Before you create a mount target for the file system, make sure that the file system is in the Running state.
     * - Stopped: The file system is unavailable.
     * - Extending: The file system is being scaled up.
     * - Stopping: The file system is being stopped.
     * - Deleting: The file system is being deleted.
     *
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage type.
     *
     * Valid values:
     * - Valid values for General-purpose NAS file systems: Capacity,Premium and Performance.
     * - Valid values for Extreme NAS file systems: standard and advance.
     * - Valid values for CPFS file systems: advance_100 (100 MB/s/TiB baseline) and advance_200 (200 MB/s/TiB baseline).
     * > CPFS file systems are available only on the China site (aliyun.com).
     *
     * @example Performance
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The features that are supported by the file system.
     *
     * @var supportedFeatures
     */
    public $supportedFeatures;

    /**
     * @description The tags that are attached to the file system.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The version number of the file system.
     *
     * This parameter is available only for Extreme NAS file systems and CPFS file systems.
     *
     * @example 2.3.4
     *
     * @var string
     */
    public $version;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp1cbv1ljve4j5hlw****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description A collection of vSwitch IDs.
     *
     * @var vswIds
     */
    public $vswIds;

    /**
     * @description The ID of the zone where the file system resides.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accessPointCount' => 'AccessPointCount',
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'bandwidth' => 'Bandwidth',
        'capacity' => 'Capacity',
        'chargeType' => 'ChargeType',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'encryptType' => 'EncryptType',
        'expiredTime' => 'ExpiredTime',
        'fileSystemId' => 'FileSystemId',
        'fileSystemType' => 'FileSystemType',
        'KMSKeyId' => 'KMSKeyId',
        'ldap' => 'Ldap',
        'meteredArchiveSize' => 'MeteredArchiveSize',
        'meteredIASize' => 'MeteredIASize',
        'meteredSize' => 'MeteredSize',
        'mountTargets' => 'MountTargets',
        'options' => 'Options',
        'packages' => 'Packages',
        'protocolType' => 'ProtocolType',
        'quorumVswId' => 'QuorumVswId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'secondaryBandwidth' => 'SecondaryBandwidth',
        'secondaryCapacity' => 'SecondaryCapacity',
        'status' => 'Status',
        'storageType' => 'StorageType',
        'supportedFeatures' => 'SupportedFeatures',
        'tags' => 'Tags',
        'version' => 'Version',
        'vpcId' => 'VpcId',
        'vswIds' => 'VswIds',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointCount) {
            $res['AccessPointCount'] = $this->accessPointCount;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->ldap) {
            $res['Ldap'] = null !== $this->ldap ? $this->ldap->toMap() : null;
        }
        if (null !== $this->meteredArchiveSize) {
            $res['MeteredArchiveSize'] = $this->meteredArchiveSize;
        }
        if (null !== $this->meteredIASize) {
            $res['MeteredIASize'] = $this->meteredIASize;
        }
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }
        if (null !== $this->mountTargets) {
            $res['MountTargets'] = null !== $this->mountTargets ? $this->mountTargets->toMap() : null;
        }
        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toMap() : null;
        }
        if (null !== $this->packages) {
            $res['Packages'] = null !== $this->packages ? $this->packages->toMap() : null;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->quorumVswId) {
            $res['QuorumVswId'] = $this->quorumVswId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->secondaryBandwidth) {
            $res['SecondaryBandwidth'] = $this->secondaryBandwidth;
        }
        if (null !== $this->secondaryCapacity) {
            $res['SecondaryCapacity'] = $this->secondaryCapacity;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->supportedFeatures) {
            $res['SupportedFeatures'] = null !== $this->supportedFeatures ? $this->supportedFeatures->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswIds) {
            $res['VswIds'] = null !== $this->vswIds ? $this->vswIds->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointCount'])) {
            $model->accessPointCount = $map['AccessPointCount'];
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['Ldap'])) {
            $model->ldap = ldap::fromMap($map['Ldap']);
        }
        if (isset($map['MeteredArchiveSize'])) {
            $model->meteredArchiveSize = $map['MeteredArchiveSize'];
        }
        if (isset($map['MeteredIASize'])) {
            $model->meteredIASize = $map['MeteredIASize'];
        }
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }
        if (isset($map['MountTargets'])) {
            $model->mountTargets = mountTargets::fromMap($map['MountTargets']);
        }
        if (isset($map['Options'])) {
            $model->options = options::fromMap($map['Options']);
        }
        if (isset($map['Packages'])) {
            $model->packages = packages::fromMap($map['Packages']);
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['QuorumVswId'])) {
            $model->quorumVswId = $map['QuorumVswId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecondaryBandwidth'])) {
            $model->secondaryBandwidth = $map['SecondaryBandwidth'];
        }
        if (isset($map['SecondaryCapacity'])) {
            $model->secondaryCapacity = $map['SecondaryCapacity'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['SupportedFeatures'])) {
            $model->supportedFeatures = supportedFeatures::fromMap($map['SupportedFeatures']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswIds'])) {
            $model->vswIds = vswIds::fromMap($map['VswIds']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
