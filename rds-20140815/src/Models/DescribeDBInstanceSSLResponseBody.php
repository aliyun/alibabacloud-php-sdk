<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSSLResponseBody extends Model
{
    /**
     * @description The method that is used to verify the identities of clients. This parameter is supported only when the instance runs PostgreSQL with cloud disks. Valid values:
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
     * @description The type of the server certificate. This parameter is supported only when the instance runs PostgreSQL with cloud disks. Valid values:
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
     * @description The public key of the CA that issues client certificates. This parameter is supported only when the instance runs PostgreSQL with cloud disks.
     *
     * @example -----BEGIN CERTIFICATE-----MIID*****viXk=-----END CERTIFICATE-----
     *
     * @var string
     */
    public $clientCACert;

    /**
     * @description The time when the public key of the CA that issues client certificates expires. This parameter is supported only when the instance runs PostgreSQL with cloud disks. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC. This parameter is not supported now.
     *
     * @example -
     *
     * @var string
     */
    public $clientCACertExpireTime;

    /**
     * @description The certificate revocation list (CRL) that contains revoked client certificates. This parameter is supported only when the instance runs PostgreSQL with cloud disks.
     *
     * @example -----BEGIN X509 CRL-----MIIB****19mg==-----END X509 CRL-----
     *
     * @var string
     */
    public $clientCertRevocationList;

    /**
     * @description The endpoint that is protected by SSL encryption.
     *
     * @example rm-bp162dfr55g47****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description Indicates whether the forceful SSL encryption feature is enabled. This parameter is supported only for ApsaraDB RDS for SQL Server instances. For more information, see [Configure the SSL encryption feature](~~95715~~).
     *
     *   **1**: enabled
     *   **0**: The feature is disabled.
     *
     * @example 1
     *
     * @var string
     */
    public $forceEncryption;

    /**
     * @description The status of the SSL link. This parameter is supported only when the instance runs PostgreSQL with cloud disks. Valid values:
     *
     *   **success**
     *   **setting**
     *   **failed**
     *
     * @example setting
     *
     * @var string
     */
    public $lastModifyStatus;

    /**
     * @description The reason why the SSL link stays in the current state. This parameter is supported only when the instance runs PostgreSQL with cloud disks.
     *
     * @example Modify DB Instance SSL Config.
     *
     * @var string
     */
    public $modifyStatusReason;

    /**
     * @description The method that is used to verify the replication permission. This parameter is supported only when the instance runs PostgreSQL with cloud disks. Valid values:
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
     * @description The ID of the request.
     *
     * @example 7705151C-E242-55AF-9929-2A3C39D979D2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the server certificate needs to be updated.
     *
     *   Valid values for ApsaraDB RDS for MySQL instances and ApsaraDB RDS for SQL Server instances:
     *
     *   **No**
     *   **Yes**
     *
     *   Valid values for ApsaraDB RDS for PostgreSQL instances:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example Yes
     *
     * @var string
     */
    public $requireUpdate;

    /**
     * @description The server certificate that needs to be updated. This parameter is supported only when the instance runs PostgreSQL with cloud disk.
     *
     * @example -
     *
     * @var string
     */
    public $requireUpdateItem;

    /**
     * @description The reason why the server certificate needs to be updated. This parameter is supported only when the instance runs PostgreSQL with cloud disks.
     *
     * @example -
     *
     * @var string
     */
    public $requireUpdateReason;

    /**
     * @description The time when the server certificate was created. This parameter is supported only when the instance runs PostgreSQL with cloud disks. In addition, this parameter is valid only when the CAType parameter value is aliyun.
     *
     * @example -
     *
     * @var string
     */
    public $SSLCreateTime;

    /**
     * @description Indicates whether SSL encryption is enabled.
     *
     *   Valid values for ApsaraDB RDS for MySQL instances and ApsaraDB RDS for SQL Server instances:
     *
     *   **Yes**
     *   **No**
     *
     *   Valid values for ApsaraDB RDS for PostgreSQL instances:
     *
     *   **on**: enabled
     *   **off**: disabled
     *
     * @example Yes
     *
     * @var string
     */
    public $SSLEnabled;

    /**
     * @description The time when the server certificate expires. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-10-11T08:16:43Z
     *
     * @var string
     */
    public $SSLExpireTime;

    /**
     * @description The URL of the certificate that is used to issue the server certificate. This parameter is supported only when the instance runs PostgreSQL with cloud disk.
     *
     * @example -
     *
     * @var string
     */
    public $serverCAUrl;

    /**
     * @description The content of the server certificate. This parameter is supported only when the instance runs PostgreSQL with cloud disks.
     *
     * @example -----BEGIN CERTIFICATE-----MIID*****QqEP-----END CERTIFICATE-----
     *
     * @var string
     */
    public $serverCert;

    /**
     * @description The private key of the server certificate. This parameter is supported only when the instance runs PostgreSQL with cloud disks.
     *
     * @example -----BEGIN PRIVATE KEY-----MIIE****ihfg==-----END PRIVATE KEY-----
     *
     * @var string
     */
    public $serverKey;

    /**
     * @description The minimum Transport Layer Security (TLS) version. Valid values: 1.0, 1.1, and 1.2. This parameter is supported only for ApsaraDB RDS for SQL Server instances. For more information, see [Configure the SSL encryption feature](~~95715~~).
     *
     * @example 1.1
     *
     * @var string
     */
    public $tlsVersion;
    protected $_name = [
        'ACL'                      => 'ACL',
        'CAType'                   => 'CAType',
        'clientCACert'             => 'ClientCACert',
        'clientCACertExpireTime'   => 'ClientCACertExpireTime',
        'clientCertRevocationList' => 'ClientCertRevocationList',
        'connectionString'         => 'ConnectionString',
        'forceEncryption'          => 'ForceEncryption',
        'lastModifyStatus'         => 'LastModifyStatus',
        'modifyStatusReason'       => 'ModifyStatusReason',
        'replicationACL'           => 'ReplicationACL',
        'requestId'                => 'RequestId',
        'requireUpdate'            => 'RequireUpdate',
        'requireUpdateItem'        => 'RequireUpdateItem',
        'requireUpdateReason'      => 'RequireUpdateReason',
        'SSLCreateTime'            => 'SSLCreateTime',
        'SSLEnabled'               => 'SSLEnabled',
        'SSLExpireTime'            => 'SSLExpireTime',
        'serverCAUrl'              => 'ServerCAUrl',
        'serverCert'               => 'ServerCert',
        'serverKey'                => 'ServerKey',
        'tlsVersion'               => 'TlsVersion',
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

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceSSLResponseBody
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
