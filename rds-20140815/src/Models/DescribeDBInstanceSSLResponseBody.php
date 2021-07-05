<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSSLResponseBody extends Model
{
    /**
     * @var string
     */
    public $serverCert;

    /**
     * @var string
     */
    public $clientCACertExpireTime;

    /**
     * @var string
     */
    public $requireUpdateItem;

    /**
     * @var string
     */
    public $serverCAUrl;

    /**
     * @var string
     */
    public $requireUpdate;

    /**
     * @var string
     */
    public $clientCertRevocationList;

    /**
     * @var string
     */
    public $SSLExpireTime;

    /**
     * @var string
     */
    public $CAType;

    /**
     * @var string
     */
    public $SSLCreateTime;

    /**
     * @var string
     */
    public $replicationACL;

    /**
     * @var string
     */
    public $ACL;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $lastModifyStatus;

    /**
     * @var string
     */
    public $SSLEnabled;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $requireUpdateReason;

    /**
     * @var string
     */
    public $clientCACert;

    /**
     * @var string
     */
    public $serverKey;

    /**
     * @var string
     */
    public $modifyStatusReason;
    protected $_name = [
        'serverCert'               => 'ServerCert',
        'clientCACertExpireTime'   => 'ClientCACertExpireTime',
        'requireUpdateItem'        => 'RequireUpdateItem',
        'serverCAUrl'              => 'ServerCAUrl',
        'requireUpdate'            => 'RequireUpdate',
        'clientCertRevocationList' => 'ClientCertRevocationList',
        'SSLExpireTime'            => 'SSLExpireTime',
        'CAType'                   => 'CAType',
        'SSLCreateTime'            => 'SSLCreateTime',
        'replicationACL'           => 'ReplicationACL',
        'ACL'                      => 'ACL',
        'requestId'                => 'RequestId',
        'lastModifyStatus'         => 'LastModifyStatus',
        'SSLEnabled'               => 'SSLEnabled',
        'connectionString'         => 'ConnectionString',
        'requireUpdateReason'      => 'RequireUpdateReason',
        'clientCACert'             => 'ClientCACert',
        'serverKey'                => 'ServerKey',
        'modifyStatusReason'       => 'ModifyStatusReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverCert) {
            $res['ServerCert'] = $this->serverCert;
        }
        if (null !== $this->clientCACertExpireTime) {
            $res['ClientCACertExpireTime'] = $this->clientCACertExpireTime;
        }
        if (null !== $this->requireUpdateItem) {
            $res['RequireUpdateItem'] = $this->requireUpdateItem;
        }
        if (null !== $this->serverCAUrl) {
            $res['ServerCAUrl'] = $this->serverCAUrl;
        }
        if (null !== $this->requireUpdate) {
            $res['RequireUpdate'] = $this->requireUpdate;
        }
        if (null !== $this->clientCertRevocationList) {
            $res['ClientCertRevocationList'] = $this->clientCertRevocationList;
        }
        if (null !== $this->SSLExpireTime) {
            $res['SSLExpireTime'] = $this->SSLExpireTime;
        }
        if (null !== $this->CAType) {
            $res['CAType'] = $this->CAType;
        }
        if (null !== $this->SSLCreateTime) {
            $res['SSLCreateTime'] = $this->SSLCreateTime;
        }
        if (null !== $this->replicationACL) {
            $res['ReplicationACL'] = $this->replicationACL;
        }
        if (null !== $this->ACL) {
            $res['ACL'] = $this->ACL;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->lastModifyStatus) {
            $res['LastModifyStatus'] = $this->lastModifyStatus;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->requireUpdateReason) {
            $res['RequireUpdateReason'] = $this->requireUpdateReason;
        }
        if (null !== $this->clientCACert) {
            $res['ClientCACert'] = $this->clientCACert;
        }
        if (null !== $this->serverKey) {
            $res['ServerKey'] = $this->serverKey;
        }
        if (null !== $this->modifyStatusReason) {
            $res['ModifyStatusReason'] = $this->modifyStatusReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceSSLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerCert'])) {
            $model->serverCert = $map['ServerCert'];
        }
        if (isset($map['ClientCACertExpireTime'])) {
            $model->clientCACertExpireTime = $map['ClientCACertExpireTime'];
        }
        if (isset($map['RequireUpdateItem'])) {
            $model->requireUpdateItem = $map['RequireUpdateItem'];
        }
        if (isset($map['ServerCAUrl'])) {
            $model->serverCAUrl = $map['ServerCAUrl'];
        }
        if (isset($map['RequireUpdate'])) {
            $model->requireUpdate = $map['RequireUpdate'];
        }
        if (isset($map['ClientCertRevocationList'])) {
            $model->clientCertRevocationList = $map['ClientCertRevocationList'];
        }
        if (isset($map['SSLExpireTime'])) {
            $model->SSLExpireTime = $map['SSLExpireTime'];
        }
        if (isset($map['CAType'])) {
            $model->CAType = $map['CAType'];
        }
        if (isset($map['SSLCreateTime'])) {
            $model->SSLCreateTime = $map['SSLCreateTime'];
        }
        if (isset($map['ReplicationACL'])) {
            $model->replicationACL = $map['ReplicationACL'];
        }
        if (isset($map['ACL'])) {
            $model->ACL = $map['ACL'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LastModifyStatus'])) {
            $model->lastModifyStatus = $map['LastModifyStatus'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['RequireUpdateReason'])) {
            $model->requireUpdateReason = $map['RequireUpdateReason'];
        }
        if (isset($map['ClientCACert'])) {
            $model->clientCACert = $map['ClientCACert'];
        }
        if (isset($map['ServerKey'])) {
            $model->serverKey = $map['ServerKey'];
        }
        if (isset($map['ModifyStatusReason'])) {
            $model->modifyStatusReason = $map['ModifyStatusReason'];
        }

        return $model;
    }
}
