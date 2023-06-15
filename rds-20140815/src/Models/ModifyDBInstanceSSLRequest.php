<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceSSLRequest extends Model
{
    /**
     * @description The method that is used to verify the identities of clients. This parameter is supported only when the instance runs PostgreSQL with cloud disks. In addition, this parameter is available only when the public key of the CA that issues client certificates is enabled. Valid values:
     *
     *   **cert**
     *   **perfer**
     *   **verify-ca**
     *   **verify-full** (supported only when the instance runs PostgreSQL 12 or later)
     *
     * @example cert
     *
     * @var string
     */
    public $ACL;

    /**
     * @description The type of the server certificate. This parameter is supported only when the instance runs PostgreSQL with cloud disks. If you set SSLEnabled to **1**, the default value of this parameter is **aliyun**. Valid values:
     *
     *   **aliyun**: a cloud certificate
     *   **custom**: a custom certificate
     *
     * @example aliyun
     *
     * @var string
     */
    public $CAType;

    /**
     * @description The public key of the CA that issues client certificates. This parameter is supported only when the instance runs PostgreSQL with cloud disks. This parameter must be specified when ClientCAEbabled is set to **1**.
     *
     * @example -----BEGIN CERTIFICATE-----MIID*****viXk=-----END CERTIFICATE-----
     *
     * @var string
     */
    public $clientCACert;

    /**
     * @description Specifies whether to enable the public key of the CA that issues client certificates. This parameter is supported only when the instance runs PostgreSQL with cloud disks. Valid values:
     *
     *   **1**: enables the public key.
     *   **0**: disables the public key.
     *
     * @example 1
     *
     * @var int
     */
    public $clientCAEnabled;

    /**
     * @description The CRL that contains revoked client certificates. This parameter is supported only when the instance runs PostgreSQL with cloud disks. This parameter must be specified when ClientCrlEnabled is set to **1**.
     *
     * @example -----BEGIN X509 CRL-----MIIB****19mg==-----END X509 CRL-----
     *
     * @var string
     */
    public $clientCertRevocationList;

    /**
     * @description Specifies whether to enable a certificate revocation list (CRL) that contains revoked client certificates. This parameter is supported only when the instance runs PostgreSQL with cloud disks. In addition, this parameter is available only when the public key of the CA that issues client certificates is enabled. Valid values:
     *
     *   **1**: enables the CRL.
     *   **0**: disables the CRL.
     *
     * @example 1
     *
     * @var int
     */
    public $clientCrlEnabled;

    /**
     * @description The internal or public endpoint for which the server certificate needs to be created or updated.
     *
     * @example rm-uf6wjk5xxxxx.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The method that is used to verify the replication permission. This parameter is supported only when the instance runs PostgreSQL with cloud disks. In addition, this parameter is available only when the public key of the CA that issues client certificates is enabled. Valid values:
     *
     *   **cert**
     *   **perfer**
     *   **verify-ca**
     *   **verify-full** (supported only when the instance runs PostgreSQL 12 or later)
     *
     * @example cert
     *
     * @var string
     */
    public $replicationACL;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to enable or disable the SSL encryption feature. Valid values:
     *
     *   **1**: enables the feature.
     *   **0**: disables the feature.
     *
     * @example 1
     *
     * @var int
     */
    public $SSLEnabled;

    /**
     * @description The content of the server certificate. This parameter is supported only when the instance runs PostgreSQL with cloud disks. This parameter must be specified when CAType is set to **custom**.
     *
     * @example -----BEGIN CERTIFICATE-----MIID*****QqEP-----END CERTIFICATE-----
     *
     * @var string
     */
    public $serverCert;

    /**
     * @description The private key of the server certificate. This parameter is supported only when the instance runs PostgreSQL with cloud disks. This parameter must be specified when CAType is set to **custom**.
     *
     * @example -----BEGIN PRIVATE KEY-----MIIE****ihfg==-----END PRIVATE KEY-----
     *
     * @var string
     */
    public $serverKey;
    protected $_name = [
        'ACL'                      => 'ACL',
        'CAType'                   => 'CAType',
        'clientCACert'             => 'ClientCACert',
        'clientCAEnabled'          => 'ClientCAEnabled',
        'clientCertRevocationList' => 'ClientCertRevocationList',
        'clientCrlEnabled'         => 'ClientCrlEnabled',
        'connectionString'         => 'ConnectionString',
        'DBInstanceId'             => 'DBInstanceId',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'replicationACL'           => 'ReplicationACL',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'SSLEnabled'               => 'SSLEnabled',
        'serverCert'               => 'ServerCert',
        'serverKey'                => 'ServerKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ACL) {
            $res['ACL'] = $this->ACL;
        }
        if (null !== $this->CAType) {
            $res['CAType'] = $this->CAType;
        }
        if (null !== $this->clientCACert) {
            $res['ClientCACert'] = $this->clientCACert;
        }
        if (null !== $this->clientCAEnabled) {
            $res['ClientCAEnabled'] = $this->clientCAEnabled;
        }
        if (null !== $this->clientCertRevocationList) {
            $res['ClientCertRevocationList'] = $this->clientCertRevocationList;
        }
        if (null !== $this->clientCrlEnabled) {
            $res['ClientCrlEnabled'] = $this->clientCrlEnabled;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->replicationACL) {
            $res['ReplicationACL'] = $this->replicationACL;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }
        if (null !== $this->serverCert) {
            $res['ServerCert'] = $this->serverCert;
        }
        if (null !== $this->serverKey) {
            $res['ServerKey'] = $this->serverKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceSSLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ACL'])) {
            $model->ACL = $map['ACL'];
        }
        if (isset($map['CAType'])) {
            $model->CAType = $map['CAType'];
        }
        if (isset($map['ClientCACert'])) {
            $model->clientCACert = $map['ClientCACert'];
        }
        if (isset($map['ClientCAEnabled'])) {
            $model->clientCAEnabled = $map['ClientCAEnabled'];
        }
        if (isset($map['ClientCertRevocationList'])) {
            $model->clientCertRevocationList = $map['ClientCertRevocationList'];
        }
        if (isset($map['ClientCrlEnabled'])) {
            $model->clientCrlEnabled = $map['ClientCrlEnabled'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReplicationACL'])) {
            $model->replicationACL = $map['ReplicationACL'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if (isset($map['ServerCert'])) {
            $model->serverCert = $map['ServerCert'];
        }
        if (isset($map['ServerKey'])) {
            $model->serverKey = $map['ServerKey'];
        }

        return $model;
    }
}
