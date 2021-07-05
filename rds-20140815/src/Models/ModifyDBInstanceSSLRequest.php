<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceSSLRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $SSLEnabled;

    /**
     * @var string
     */
    public $CAType;

    /**
     * @var string
     */
    public $serverCert;

    /**
     * @var string
     */
    public $serverKey;

    /**
     * @var int
     */
    public $clientCAEnabled;

    /**
     * @var string
     */
    public $clientCACert;

    /**
     * @var int
     */
    public $clientCrlEnabled;

    /**
     * @var string
     */
    public $clientCertRevocationList;

    /**
     * @var string
     */
    public $ACL;

    /**
     * @var string
     */
    public $replicationACL;
    protected $_name = [
        'ownerId'                  => 'OwnerId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'DBInstanceId'             => 'DBInstanceId',
        'connectionString'         => 'ConnectionString',
        'ownerAccount'             => 'OwnerAccount',
        'SSLEnabled'               => 'SSLEnabled',
        'CAType'                   => 'CAType',
        'serverCert'               => 'ServerCert',
        'serverKey'                => 'ServerKey',
        'clientCAEnabled'          => 'ClientCAEnabled',
        'clientCACert'             => 'ClientCACert',
        'clientCrlEnabled'         => 'ClientCrlEnabled',
        'clientCertRevocationList' => 'ClientCertRevocationList',
        'ACL'                      => 'ACL',
        'replicationACL'           => 'ReplicationACL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }
        if (null !== $this->CAType) {
            $res['CAType'] = $this->CAType;
        }
        if (null !== $this->serverCert) {
            $res['ServerCert'] = $this->serverCert;
        }
        if (null !== $this->serverKey) {
            $res['ServerKey'] = $this->serverKey;
        }
        if (null !== $this->clientCAEnabled) {
            $res['ClientCAEnabled'] = $this->clientCAEnabled;
        }
        if (null !== $this->clientCACert) {
            $res['ClientCACert'] = $this->clientCACert;
        }
        if (null !== $this->clientCrlEnabled) {
            $res['ClientCrlEnabled'] = $this->clientCrlEnabled;
        }
        if (null !== $this->clientCertRevocationList) {
            $res['ClientCertRevocationList'] = $this->clientCertRevocationList;
        }
        if (null !== $this->ACL) {
            $res['ACL'] = $this->ACL;
        }
        if (null !== $this->replicationACL) {
            $res['ReplicationACL'] = $this->replicationACL;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if (isset($map['CAType'])) {
            $model->CAType = $map['CAType'];
        }
        if (isset($map['ServerCert'])) {
            $model->serverCert = $map['ServerCert'];
        }
        if (isset($map['ServerKey'])) {
            $model->serverKey = $map['ServerKey'];
        }
        if (isset($map['ClientCAEnabled'])) {
            $model->clientCAEnabled = $map['ClientCAEnabled'];
        }
        if (isset($map['ClientCACert'])) {
            $model->clientCACert = $map['ClientCACert'];
        }
        if (isset($map['ClientCrlEnabled'])) {
            $model->clientCrlEnabled = $map['ClientCrlEnabled'];
        }
        if (isset($map['ClientCertRevocationList'])) {
            $model->clientCertRevocationList = $map['ClientCertRevocationList'];
        }
        if (isset($map['ACL'])) {
            $model->ACL = $map['ACL'];
        }
        if (isset($map['ReplicationACL'])) {
            $model->replicationACL = $map['ReplicationACL'];
        }

        return $model;
    }
}
