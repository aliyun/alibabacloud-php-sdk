<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceTDERequest extends Model
{
    /**
     * @description The file that contains the certificate.\
     * Format:
     *
     *   Public endpoint: `oss-<The ID of the region>.aliyuncs.com:<The name of the bucket>:<The name of the certificate file>` (The file name contains the extension.)
     *   Internal endpoint: `oss-<The ID of the region>-internal.aliyuncs.com:<The name of the bucket>:<The name of the certificate file>` (The file name contains the extension.)
     *
     * >
     *
     *   This parameter is available when the instance runs SQL Server 2019 SE or an Enterprise Edition of SQL Server.
     *
     *   You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example oss-ap-southeast-1.aliyuncs.com:****:key.cer
     *
     * @var string
     */
    public $certificate;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](~~610396~~) operation to query the ID of the instance.
     *
     * @example rm-uf6wjk5****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database for which you want to enable TDE. You can specify up to 50 database names in a single request. If you specify multiple database names, separate the database names with commas (,).
     *
     * > This parameter is available and must be specified only when the instance runs SQL Server 2019 SE or an Enterprise Edition of SQL Server.
     * @example testDB
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The ID of the custom key.
     *
     * > This parameter is available when the instance runs MySQL or PostgreSQL.
     * @example 749c1df7-****-****-****-****
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description Specifies whether to replace the key. Valid values:
     *
     *   **true**: replaces the key.
     *   **false**: does not replace the key.
     *
     * Default value: **false**
     *
     * > This parameter is available only when the instance runs PostgreSQL.
     * @example false
     *
     * @var bool
     */
    public $isRotate;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The password of the certificate.
     *
     * > This parameter is available when the instance runs SQL Server 2019 SE or an Enterprise Edition of SQL Server.
     * @example 1qaz@WSX
     *
     * @var string
     */
    public $passWord;

    /**
     * @description The file that contains the private key of the certificate.\
     * Format:
     *
     *   Public endpoint: `oss-<The ID of the region>.aliyuncs.com:<The name of the bucket>:<The name of the file that contains the private key>` (The file name contains the extension.)
     *   Internal endpoint: `oss-<The ID of the region>-internal.aliyuncs.com:<The name of the bucket>:<The name of the file that contains the private key>` (The file name contains the extension.)
     *
     * >
     *
     *   This parameter is available when the instance runs SQL Server 2019 SE or an Enterprise Edition of SQL Server.
     *
     *   You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example oss-ap-southeast-1.aliyuncs.com:****:key.pvk
     *
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role. A RAM role is a virtual identity that you can create within your Alibaba Cloud account. For more information, see [RAM role overview](~~93689~~).
     *
     * > This parameter is available when the instance runs MySQL or PostgreSQL.
     * @example acs:ram::1406926****:role/aliyunrdsinstanceencryptiondefaultrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description The status of TDE. Valid values:
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example Enabled
     *
     * @var string
     */
    public $TDEStatus;
    protected $_name = [
        'certificate'          => 'Certificate',
        'DBInstanceId'         => 'DBInstanceId',
        'DBName'               => 'DBName',
        'encryptionKey'        => 'EncryptionKey',
        'isRotate'             => 'IsRotate',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'passWord'             => 'PassWord',
        'privateKey'           => 'PrivateKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'roleArn'              => 'RoleArn',
        'TDEStatus'            => 'TDEStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->isRotate) {
            $res['IsRotate'] = $this->isRotate;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->passWord) {
            $res['PassWord'] = $this->passWord;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceTDERequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['IsRotate'])) {
            $model->isRotate = $map['IsRotate'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PassWord'])) {
            $model->passWord = $map['PassWord'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }

        return $model;
    }
}
