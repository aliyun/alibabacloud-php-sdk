<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\ldap;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\options;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\packages;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\redundancyVSwitchIds;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\supportedFeatures;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\tags;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\vswIds;

class fileSystem extends Model
{
    /**
     * @var string
     */
    public $accessPointCount;

    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $encryptType;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var ldap
     */
    public $ldap;

    /**
     * @var int
     */
    public $meteredArchiveSize;

    /**
     * @var int
     */
    public $meteredIASize;

    /**
     * @var int
     */
    public $meteredSize;

    /**
     * @var mountTargets
     */
    public $mountTargets;

    /**
     * @var options
     */
    public $options;

    /**
     * @var packages
     */
    public $packages;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $quorumVswId;

    /**
     * @var string
     */
    public $redundancyType;

    /**
     * @var redundancyVSwitchIds
     */
    public $redundancyVSwitchIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var supportedFeatures
     */
    public $supportedFeatures;

    /**
     * @var tags
     */
    public $tags;

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
    public $vscTarget;

    /**
     * @var vswIds
     */
    public $vswIds;

    /**
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
        'redundancyType' => 'RedundancyType',
        'redundancyVSwitchIds' => 'RedundancyVSwitchIds',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'storageType' => 'StorageType',
        'supportedFeatures' => 'SupportedFeatures',
        'tags' => 'Tags',
        'version' => 'Version',
        'vpcId' => 'VpcId',
        'vscTarget' => 'VscTarget',
        'vswIds' => 'VswIds',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->ldap) {
            $this->ldap->validate();
        }
        if (null !== $this->mountTargets) {
            $this->mountTargets->validate();
        }
        if (null !== $this->options) {
            $this->options->validate();
        }
        if (null !== $this->packages) {
            $this->packages->validate();
        }
        if (null !== $this->redundancyVSwitchIds) {
            $this->redundancyVSwitchIds->validate();
        }
        if (null !== $this->supportedFeatures) {
            $this->supportedFeatures->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->vswIds) {
            $this->vswIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Ldap'] = null !== $this->ldap ? $this->ldap->toArray($noStream) : $this->ldap;
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
            $res['MountTargets'] = null !== $this->mountTargets ? $this->mountTargets->toArray($noStream) : $this->mountTargets;
        }

        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toArray($noStream) : $this->options;
        }

        if (null !== $this->packages) {
            $res['Packages'] = null !== $this->packages ? $this->packages->toArray($noStream) : $this->packages;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->quorumVswId) {
            $res['QuorumVswId'] = $this->quorumVswId;
        }

        if (null !== $this->redundancyType) {
            $res['RedundancyType'] = $this->redundancyType;
        }

        if (null !== $this->redundancyVSwitchIds) {
            $res['RedundancyVSwitchIds'] = null !== $this->redundancyVSwitchIds ? $this->redundancyVSwitchIds->toArray($noStream) : $this->redundancyVSwitchIds;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->supportedFeatures) {
            $res['SupportedFeatures'] = null !== $this->supportedFeatures ? $this->supportedFeatures->toArray($noStream) : $this->supportedFeatures;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vscTarget) {
            $res['VscTarget'] = $this->vscTarget;
        }

        if (null !== $this->vswIds) {
            $res['VswIds'] = null !== $this->vswIds ? $this->vswIds->toArray($noStream) : $this->vswIds;
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

        if (isset($map['RedundancyType'])) {
            $model->redundancyType = $map['RedundancyType'];
        }

        if (isset($map['RedundancyVSwitchIds'])) {
            $model->redundancyVSwitchIds = redundancyVSwitchIds::fromMap($map['RedundancyVSwitchIds']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        if (isset($map['VscTarget'])) {
            $model->vscTarget = $map['VscTarget'];
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
