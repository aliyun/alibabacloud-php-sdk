<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateFileSystemRequest extends Model
{
    /**
     * @description The maximum throughput of the file system.
     *
     * Specify a value based on the specifications on the buy page.
     * @example 150
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The capacity of the file system. Unit: GiB.
     *
     * [Extreme NAS file system (Pay-as-you-go)](https://common-buy-intl.alibabacloud.com/?commodityCode=nas_extpost_public_intl#/buy)
     * @example 100
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The billing method.
     *
     * Valid values:
     *
     *   PayAsYouGo (default): pay-as-you-go
     *   Subscription: subscription
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How do I ensure the idempotence?](~~25693~~)
     *
     * > If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the file system.
     *
     * Limits:
     *
     *   The description must be 2 to 128 characters in length.
     *   The description must start with a letter and cannot start with `http://` or `https://`.
     *   The description can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform a dry run.
     *
     * Valid values:
     *
     *   true: performs a dry run. The system checks the required parameters, request syntax, limits, and available NAS resources. If the request fails the dry run, an error message is returned. If the request passes the precheck, the HTTP status code 200 is returned. No value is returned for the FileSystemId parameter.
     *   false (default): performs a dry run and sends the request. If the request passes the dry run, a file system is created.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The subscription duration.
     *
     * If you do not renew a subscription file system when the file system expires, the file system is automatically released.
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description Specifies whether to encrypt the data in the NAS file system.
     *
     * Valid values:
     *
     *   0: The data in the file system is not encrypted.
     *   1: A NAS-managed key is used to encrypt the data in the file system. This value is valid only if the FileSystemType parameter is set to standard or extreme.
     *   2: A KMS-managed key is used to encrypt the data in the file system. This value is valid only if the FileSystemType parameter is set to extreme.
     *
     * > You can use KMS-managed keys only in the following regions: US (Silicon Valley), US (Virginia), UK (London), Australia (Sydney), Germany (Frankfurt), India (Mumbai), and Singapore.
     * @example 1
     *
     * @var int
     */
    public $encryptType;

    /**
     * @description The type of the file system.
     *
     * Valid values:
     *
     *   standard (default): General-purpose NAS file system
     *   extreme: Extreme NAS file system
     *   cpfs: Cloud Parallel File Storage (CPFS) file system
     *
     * > CPFS file systems are available only on the China site (aliyun.com).
     * @example standard
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The ID of the KMS-managed key.
     *
     * This parameter is required only if the EncryptType parameter is set to 2.
     * @var string
     */
    public $kmsKeyId;

    /**
     * @description The protocol type.
     *
     *   If the FileSystemType parameter is set to standard, you can set the ProtocolType parameter to NFS or SMB.
     *   If the FileSystemType parameter is set to extreme, you can set the ProtocolType parameter to NFS.
     *
     * @example NFS
     *
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The snapshot ID.
     *
     * > You can create a file system from a snapshot. In this case, the version of the file system is the same as that of the source file system. For example, the source file system of the snapshot uses version 1. To create a file system of version 2, you can create File System A from the snapshot and create File System B of version 2. You can then copy the data and migrate your business from File System A to File System B.
     * @example s-xxx
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The storage type.
     *
     *   If the FileSystemType parameter is set to standard, you can set the StorageType parameter to Performance or Capacity.
     *   If the FileSystemType parameter is set to extreme, you can set the StorageType parameter to standard or advance.
     *
     * @example Performance
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The ID of the vSwitch.
     *
     * This parameter is reserved and does not take effect. You do not need to configure this parameter.
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * This parameter is reserved and does not take effect. You do not need to configure this parameter.
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * This parameter is required if the FileSystemType parameter is set to extreme.
     *
     * > *   An Elastic Compute Service (ECS) instance and a NAS file system that reside in different zones of the same region can access each other.
     * >*   We recommend that you select the zone where the ECS instance resides. This prevents cross-zone latency between the file system and the ECS instance.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'bandwidth'       => 'Bandwidth',
        'capacity'        => 'Capacity',
        'chargeType'      => 'ChargeType',
        'clientToken'     => 'ClientToken',
        'description'     => 'Description',
        'dryRun'          => 'DryRun',
        'duration'        => 'Duration',
        'encryptType'     => 'EncryptType',
        'fileSystemType'  => 'FileSystemType',
        'kmsKeyId'        => 'KmsKeyId',
        'protocolType'    => 'ProtocolType',
        'resourceGroupId' => 'ResourceGroupId',
        'snapshotId'      => 'SnapshotId',
        'storageType'     => 'StorageType',
        'vSwitchId'       => 'VSwitchId',
        'vpcId'           => 'VpcId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
     * @return CreateFileSystemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
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
