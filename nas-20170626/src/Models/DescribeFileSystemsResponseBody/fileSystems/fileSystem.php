<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\ldap;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\packages;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\supportedFeatures;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\tags;
use AlibabaCloud\Tea\Model;

class fileSystem extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $meteredIASize;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $meteredSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var supportedFeatures
     */
    public $supportedFeatures;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var mountTargets
     */
    public $mountTargets;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var int
     */
    public $encryptType;

    /**
     * @var ldap
     */
    public $ldap;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var packages
     */
    public $packages;
    protected $_name = [
        'status'            => 'Status',
        'meteredIASize'     => 'MeteredIASize',
        'capacity'          => 'Capacity',
        'createTime'        => 'CreateTime',
        'chargeType'        => 'ChargeType',
        'tags'              => 'Tags',
        'storageType'       => 'StorageType',
        'meteredSize'       => 'MeteredSize',
        'description'       => 'Description',
        'bandwidth'         => 'Bandwidth',
        'supportedFeatures' => 'SupportedFeatures',
        'version'           => 'Version',
        'protocolType'      => 'ProtocolType',
        'mountTargets'      => 'MountTargets',
        'KMSKeyId'          => 'KMSKeyId',
        'regionId'          => 'RegionId',
        'fileSystemType'    => 'FileSystemType',
        'fileSystemId'      => 'FileSystemId',
        'encryptType'       => 'EncryptType',
        'ldap'              => 'Ldap',
        'expiredTime'       => 'ExpiredTime',
        'zoneId'            => 'ZoneId',
        'packages'          => 'Packages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->meteredIASize) {
            $res['MeteredIASize'] = $this->meteredIASize;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->meteredSize) {
            $res['MeteredSize'] = $this->meteredSize;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->supportedFeatures) {
            $res['SupportedFeatures'] = null !== $this->supportedFeatures ? $this->supportedFeatures->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->mountTargets) {
            $res['MountTargets'] = null !== $this->mountTargets ? $this->mountTargets->toMap() : null;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->ldap) {
            $res['Ldap'] = null !== $this->ldap ? $this->ldap->toMap() : null;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->packages) {
            $res['Packages'] = null !== $this->packages ? $this->packages->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['MeteredIASize'])) {
            $model->meteredIASize = $map['MeteredIASize'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['MeteredSize'])) {
            $model->meteredSize = $map['MeteredSize'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['SupportedFeatures'])) {
            $model->supportedFeatures = supportedFeatures::fromMap($map['SupportedFeatures']);
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['MountTargets'])) {
            $model->mountTargets = mountTargets::fromMap($map['MountTargets']);
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['Ldap'])) {
            $model->ldap = ldap::fromMap($map['Ldap']);
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Packages'])) {
            $model->packages = packages::fromMap($map['Packages']);
        }

        return $model;
    }
}
