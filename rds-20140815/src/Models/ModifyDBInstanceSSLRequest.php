<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBInstanceSSLRequest extends Model
{
    /**
     * @var string
     */
    public $ACL;
    /**
     * @var string
     */
    public $CAType;
    /**
     * @var string
     */
    public $certificate;
    /**
     * @var string
     */
    public $clientCACert;
    /**
     * @var int
     */
    public $clientCAEnabled;
    /**
     * @var string
     */
    public $clientCertRevocationList;
    /**
     * @var int
     */
    public $clientCrlEnabled;
    /**
     * @var string
     */
    public $connectionString;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $forceEncryption;
    /**
     * @var string
     */
    public $ownerAccount;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $passWord;
    /**
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
     * @var int
     */
    public $SSLEnabled;
    /**
     * @var string
     */
    public $serverCert;
    /**
     * @var string
     */
    public $serverKey;
    /**
     * @var string
     */
    public $tlsVersion;
    protected $_name = [
        'ACL'                      => 'ACL',
        'CAType'                   => 'CAType',
        'certificate'              => 'Certificate',
        'clientCACert'             => 'ClientCACert',
        'clientCAEnabled'          => 'ClientCAEnabled',
        'clientCertRevocationList' => 'ClientCertRevocationList',
        'clientCrlEnabled'         => 'ClientCrlEnabled',
        'connectionString'         => 'ConnectionString',
        'DBInstanceId'             => 'DBInstanceId',
        'forceEncryption'          => 'ForceEncryption',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'passWord'                 => 'PassWord',
        'replicationACL'           => 'ReplicationACL',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'SSLEnabled'               => 'SSLEnabled',
        'serverCert'               => 'ServerCert',
        'serverKey'                => 'ServerKey',
        'tlsVersion'               => 'TlsVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ACL) {
            $res['ACL'] = $this->ACL;
        }

        if (null !== $this->CAType) {
            $res['CAType'] = $this->CAType;
        }

        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
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

        if (null !== $this->forceEncryption) {
            $res['ForceEncryption'] = $this->forceEncryption;
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

        if (null !== $this->tlsVersion) {
            $res['TlsVersion'] = $this->tlsVersion;
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
        if (isset($map['ACL'])) {
            $model->ACL = $map['ACL'];
        }

        if (isset($map['CAType'])) {
            $model->CAType = $map['CAType'];
        }

        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
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

        if (isset($map['ForceEncryption'])) {
            $model->forceEncryption = $map['ForceEncryption'];
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

        if (isset($map['TlsVersion'])) {
            $model->tlsVersion = $map['TlsVersion'];
        }

        return $model;
    }
}
