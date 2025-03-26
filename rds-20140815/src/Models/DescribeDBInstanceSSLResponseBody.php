<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBInstanceSSLResponseBody extends Model
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
    public $clientCACert;

    /**
     * @var string
     */
    public $clientCACertExpireTime;

    /**
     * @var string
     */
    public $clientCertRevocationList;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $forceEncryption;

    /**
     * @var string
     */
    public $lastModifyStatus;

    /**
     * @var string
     */
    public $modifyStatusReason;

    /**
     * @var string
     */
    public $replicationACL;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requireUpdate;

    /**
     * @var string
     */
    public $requireUpdateItem;

    /**
     * @var string
     */
    public $requireUpdateReason;

    /**
     * @var string
     */
    public $SSLCreateTime;

    /**
     * @var string
     */
    public $SSLEnabled;

    /**
     * @var string
     */
    public $SSLExpireTime;

    /**
     * @var string
     */
    public $serverCAUrl;

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
        'ACL' => 'ACL',
        'CAType' => 'CAType',
        'clientCACert' => 'ClientCACert',
        'clientCACertExpireTime' => 'ClientCACertExpireTime',
        'clientCertRevocationList' => 'ClientCertRevocationList',
        'connectionString' => 'ConnectionString',
        'forceEncryption' => 'ForceEncryption',
        'lastModifyStatus' => 'LastModifyStatus',
        'modifyStatusReason' => 'ModifyStatusReason',
        'replicationACL' => 'ReplicationACL',
        'requestId' => 'RequestId',
        'requireUpdate' => 'RequireUpdate',
        'requireUpdateItem' => 'RequireUpdateItem',
        'requireUpdateReason' => 'RequireUpdateReason',
        'SSLCreateTime' => 'SSLCreateTime',
        'SSLEnabled' => 'SSLEnabled',
        'SSLExpireTime' => 'SSLExpireTime',
        'serverCAUrl' => 'ServerCAUrl',
        'serverCert' => 'ServerCert',
        'serverKey' => 'ServerKey',
        'tlsVersion' => 'TlsVersion',
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

        if (null !== $this->clientCACert) {
            $res['ClientCACert'] = $this->clientCACert;
        }

        if (null !== $this->clientCACertExpireTime) {
            $res['ClientCACertExpireTime'] = $this->clientCACertExpireTime;
        }

        if (null !== $this->clientCertRevocationList) {
            $res['ClientCertRevocationList'] = $this->clientCertRevocationList;
        }

        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->forceEncryption) {
            $res['ForceEncryption'] = $this->forceEncryption;
        }

        if (null !== $this->lastModifyStatus) {
            $res['LastModifyStatus'] = $this->lastModifyStatus;
        }

        if (null !== $this->modifyStatusReason) {
            $res['ModifyStatusReason'] = $this->modifyStatusReason;
        }

        if (null !== $this->replicationACL) {
            $res['ReplicationACL'] = $this->replicationACL;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requireUpdate) {
            $res['RequireUpdate'] = $this->requireUpdate;
        }

        if (null !== $this->requireUpdateItem) {
            $res['RequireUpdateItem'] = $this->requireUpdateItem;
        }

        if (null !== $this->requireUpdateReason) {
            $res['RequireUpdateReason'] = $this->requireUpdateReason;
        }

        if (null !== $this->SSLCreateTime) {
            $res['SSLCreateTime'] = $this->SSLCreateTime;
        }

        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }

        if (null !== $this->SSLExpireTime) {
            $res['SSLExpireTime'] = $this->SSLExpireTime;
        }

        if (null !== $this->serverCAUrl) {
            $res['ServerCAUrl'] = $this->serverCAUrl;
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

        if (isset($map['ClientCACert'])) {
            $model->clientCACert = $map['ClientCACert'];
        }

        if (isset($map['ClientCACertExpireTime'])) {
            $model->clientCACertExpireTime = $map['ClientCACertExpireTime'];
        }

        if (isset($map['ClientCertRevocationList'])) {
            $model->clientCertRevocationList = $map['ClientCertRevocationList'];
        }

        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['ForceEncryption'])) {
            $model->forceEncryption = $map['ForceEncryption'];
        }

        if (isset($map['LastModifyStatus'])) {
            $model->lastModifyStatus = $map['LastModifyStatus'];
        }

        if (isset($map['ModifyStatusReason'])) {
            $model->modifyStatusReason = $map['ModifyStatusReason'];
        }

        if (isset($map['ReplicationACL'])) {
            $model->replicationACL = $map['ReplicationACL'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RequireUpdate'])) {
            $model->requireUpdate = $map['RequireUpdate'];
        }

        if (isset($map['RequireUpdateItem'])) {
            $model->requireUpdateItem = $map['RequireUpdateItem'];
        }

        if (isset($map['RequireUpdateReason'])) {
            $model->requireUpdateReason = $map['RequireUpdateReason'];
        }

        if (isset($map['SSLCreateTime'])) {
            $model->SSLCreateTime = $map['SSLCreateTime'];
        }

        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }

        if (isset($map['SSLExpireTime'])) {
            $model->SSLExpireTime = $map['SSLExpireTime'];
        }

        if (isset($map['ServerCAUrl'])) {
            $model->serverCAUrl = $map['ServerCAUrl'];
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
