<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreatePostgresExtensionsRequest extends Model
{
    /**
     * @description The account of the user who owns the extension. Only privileged accounts are supported.
     *
     * @example test_user
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the generated token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * @example pgm-gc7f1****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The database name. You can call the DescribeDatabases operation to query the database name.
     *
     * @example test_db
     *
     * @var string
     */
    public $DBNames;

    /**
     * @description The extension that you want to install. If you want to install multiple extensions, separate them with commas (,). If you do not specify the **SourceDatabase** parameter, you must specify this parameter.
     *
     * @example citext,pg_profile
     *
     * @var string
     */
    public $extensions;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The risk description that you need to confirm. If your instance runs an outdated minor engine version, installing specific extensions on the instance poses security risks. Proceed with the installation only after you acknowledge these risks. Valid values:
     *
     *   true
     *   false
     *
     * >  For more information about the risks, see [Limits on extension creation for ApsaraDB RDS for PostgreSQL instances](~~2587815~~).
     * @example true
     *
     * @var bool
     */
    public $riskConfirmed;

    /**
     * @description The source database from which you want to synchronize the extension to the destination database. If you do not specify the **Extensions** parameter, you must specify this parameter.
     *
     * @example source_db
     *
     * @var string
     */
    public $sourceDatabase;
    protected $_name = [
        'accountName'          => 'AccountName',
        'clientToken'          => 'ClientToken',
        'DBInstanceId'         => 'DBInstanceId',
        'DBNames'              => 'DBNames',
        'extensions'           => 'Extensions',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'riskConfirmed'        => 'RiskConfirmed',
        'sourceDatabase'       => 'SourceDatabase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBNames) {
            $res['DBNames'] = $this->DBNames;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->riskConfirmed) {
            $res['RiskConfirmed'] = $this->riskConfirmed;
        }
        if (null !== $this->sourceDatabase) {
            $res['SourceDatabase'] = $this->sourceDatabase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePostgresExtensionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBNames'])) {
            $model->DBNames = $map['DBNames'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RiskConfirmed'])) {
            $model->riskConfirmed = $map['RiskConfirmed'];
        }
        if (isset($map['SourceDatabase'])) {
            $model->sourceDatabase = $map['SourceDatabase'];
        }

        return $model;
    }
}
