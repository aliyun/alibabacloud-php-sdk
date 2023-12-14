<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewayFileShareRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $accessBasedEnumeration;

    /**
     * @example 1234
     *
     * @var int
     */
    public $backendLimit;

    /**
     * @example true
     *
     * @var bool
     */
    public $browsable;

    /**
     * @example false
     *
     * @var bool
     */
    public $bypassCacheRead;

    /**
     * @example Cache
     *
     * @var string
     */
    public $cacheMode;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $clientSideCmk;

    /**
     * @example false
     *
     * @var bool
     */
    public $clientSideEncryption;

    /**
     * @example false
     *
     * @var bool
     */
    public $directIO;

    /**
     * @example 0
     *
     * @var int
     */
    public $downloadLimit;

    /**
     * @example false
     *
     * @var bool
     */
    public $fastReclaim;

    /**
     * @example 1234
     *
     * @var int
     */
    public $frontendLimit;

    /**
     * @example gw-000eg44nmxbsfwbvq***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example false
     *
     * @var bool
     */
    public $ignoreDelete;

    /**
     * @example false
     *
     * @var bool
     */
    public $inPlace;

    /**
     * @example 0
     *
     * @var int
     */
    public $kmsRotatePeriod;

    /**
     * @example 5
     *
     * @var int
     */
    public $lagPeriod;

    /**
     * @example /dev/vdb
     *
     * @var string
     */
    public $localFilePath;

    /**
     * @example alex***
     *
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var bool
     */
    public $nfsV4Optimization;

    /**
     * @example testbucket
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @example true
     *
     * @var bool
     */
    public $ossBucketSsl;

    /**
     * @example oss-cn-hangzhou-internal.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @example test1
     *
     * @var string
     */
    public $partialSyncPaths;

    /**
     * @example test1
     *
     * @var string
     */
    public $pathPrefix;

    /**
     * @example 4500
     *
     * @var int
     */
    public $pollingInterval;

    /**
     * @example 12.12.12.12
     *
     * @var string
     */
    public $readOnlyClientList;

    /**
     * @example userA，userB
     *
     * @var string
     */
    public $readOnlyUserList;

    /**
     * @example 12.12.12.12
     *
     * @var string
     */
    public $readWriteClientList;

    /**
     * @example user1，user2
     *
     * @var string
     */
    public $readWriteUserList;

    /**
     * @example false
     *
     * @var bool
     */
    public $remoteSync;

    /**
     * @example false
     *
     * @var bool
     */
    public $remoteSyncDownload;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example AES256
     *
     * @var string
     */
    public $serverSideAlgorithm;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $serverSideCmk;

    /**
     * @example false
     *
     * @var bool
     */
    public $serverSideEncryption;

    /**
     * @example NFS
     *
     * @var string
     */
    public $shareProtocol;

    /**
     * @example none
     *
     * @var string
     */
    public $squash;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportArchive;

    /**
     * @example false
     *
     * @var bool
     */
    public $transferAcceleration;

    /**
     * @example false
     *
     * @var bool
     */
    public $windowsAcl;
    protected $_name = [
        'accessBasedEnumeration' => 'AccessBasedEnumeration',
        'backendLimit'           => 'BackendLimit',
        'browsable'              => 'Browsable',
        'bypassCacheRead'        => 'BypassCacheRead',
        'cacheMode'              => 'CacheMode',
        'clientSideCmk'          => 'ClientSideCmk',
        'clientSideEncryption'   => 'ClientSideEncryption',
        'directIO'               => 'DirectIO',
        'downloadLimit'          => 'DownloadLimit',
        'fastReclaim'            => 'FastReclaim',
        'frontendLimit'          => 'FrontendLimit',
        'gatewayId'              => 'GatewayId',
        'ignoreDelete'           => 'IgnoreDelete',
        'inPlace'                => 'InPlace',
        'kmsRotatePeriod'        => 'KmsRotatePeriod',
        'lagPeriod'              => 'LagPeriod',
        'localFilePath'          => 'LocalFilePath',
        'name'                   => 'Name',
        'nfsV4Optimization'      => 'NfsV4Optimization',
        'ossBucketName'          => 'OssBucketName',
        'ossBucketSsl'           => 'OssBucketSsl',
        'ossEndpoint'            => 'OssEndpoint',
        'partialSyncPaths'       => 'PartialSyncPaths',
        'pathPrefix'             => 'PathPrefix',
        'pollingInterval'        => 'PollingInterval',
        'readOnlyClientList'     => 'ReadOnlyClientList',
        'readOnlyUserList'       => 'ReadOnlyUserList',
        'readWriteClientList'    => 'ReadWriteClientList',
        'readWriteUserList'      => 'ReadWriteUserList',
        'remoteSync'             => 'RemoteSync',
        'remoteSyncDownload'     => 'RemoteSyncDownload',
        'securityToken'          => 'SecurityToken',
        'serverSideAlgorithm'    => 'ServerSideAlgorithm',
        'serverSideCmk'          => 'ServerSideCmk',
        'serverSideEncryption'   => 'ServerSideEncryption',
        'shareProtocol'          => 'ShareProtocol',
        'squash'                 => 'Squash',
        'supportArchive'         => 'SupportArchive',
        'transferAcceleration'   => 'TransferAcceleration',
        'windowsAcl'             => 'WindowsAcl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessBasedEnumeration) {
            $res['AccessBasedEnumeration'] = $this->accessBasedEnumeration;
        }
        if (null !== $this->backendLimit) {
            $res['BackendLimit'] = $this->backendLimit;
        }
        if (null !== $this->browsable) {
            $res['Browsable'] = $this->browsable;
        }
        if (null !== $this->bypassCacheRead) {
            $res['BypassCacheRead'] = $this->bypassCacheRead;
        }
        if (null !== $this->cacheMode) {
            $res['CacheMode'] = $this->cacheMode;
        }
        if (null !== $this->clientSideCmk) {
            $res['ClientSideCmk'] = $this->clientSideCmk;
        }
        if (null !== $this->clientSideEncryption) {
            $res['ClientSideEncryption'] = $this->clientSideEncryption;
        }
        if (null !== $this->directIO) {
            $res['DirectIO'] = $this->directIO;
        }
        if (null !== $this->downloadLimit) {
            $res['DownloadLimit'] = $this->downloadLimit;
        }
        if (null !== $this->fastReclaim) {
            $res['FastReclaim'] = $this->fastReclaim;
        }
        if (null !== $this->frontendLimit) {
            $res['FrontendLimit'] = $this->frontendLimit;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->ignoreDelete) {
            $res['IgnoreDelete'] = $this->ignoreDelete;
        }
        if (null !== $this->inPlace) {
            $res['InPlace'] = $this->inPlace;
        }
        if (null !== $this->kmsRotatePeriod) {
            $res['KmsRotatePeriod'] = $this->kmsRotatePeriod;
        }
        if (null !== $this->lagPeriod) {
            $res['LagPeriod'] = $this->lagPeriod;
        }
        if (null !== $this->localFilePath) {
            $res['LocalFilePath'] = $this->localFilePath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nfsV4Optimization) {
            $res['NfsV4Optimization'] = $this->nfsV4Optimization;
        }
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossBucketSsl) {
            $res['OssBucketSsl'] = $this->ossBucketSsl;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->partialSyncPaths) {
            $res['PartialSyncPaths'] = $this->partialSyncPaths;
        }
        if (null !== $this->pathPrefix) {
            $res['PathPrefix'] = $this->pathPrefix;
        }
        if (null !== $this->pollingInterval) {
            $res['PollingInterval'] = $this->pollingInterval;
        }
        if (null !== $this->readOnlyClientList) {
            $res['ReadOnlyClientList'] = $this->readOnlyClientList;
        }
        if (null !== $this->readOnlyUserList) {
            $res['ReadOnlyUserList'] = $this->readOnlyUserList;
        }
        if (null !== $this->readWriteClientList) {
            $res['ReadWriteClientList'] = $this->readWriteClientList;
        }
        if (null !== $this->readWriteUserList) {
            $res['ReadWriteUserList'] = $this->readWriteUserList;
        }
        if (null !== $this->remoteSync) {
            $res['RemoteSync'] = $this->remoteSync;
        }
        if (null !== $this->remoteSyncDownload) {
            $res['RemoteSyncDownload'] = $this->remoteSyncDownload;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serverSideAlgorithm) {
            $res['ServerSideAlgorithm'] = $this->serverSideAlgorithm;
        }
        if (null !== $this->serverSideCmk) {
            $res['ServerSideCmk'] = $this->serverSideCmk;
        }
        if (null !== $this->serverSideEncryption) {
            $res['ServerSideEncryption'] = $this->serverSideEncryption;
        }
        if (null !== $this->shareProtocol) {
            $res['ShareProtocol'] = $this->shareProtocol;
        }
        if (null !== $this->squash) {
            $res['Squash'] = $this->squash;
        }
        if (null !== $this->supportArchive) {
            $res['SupportArchive'] = $this->supportArchive;
        }
        if (null !== $this->transferAcceleration) {
            $res['TransferAcceleration'] = $this->transferAcceleration;
        }
        if (null !== $this->windowsAcl) {
            $res['WindowsAcl'] = $this->windowsAcl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayFileShareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessBasedEnumeration'])) {
            $model->accessBasedEnumeration = $map['AccessBasedEnumeration'];
        }
        if (isset($map['BackendLimit'])) {
            $model->backendLimit = $map['BackendLimit'];
        }
        if (isset($map['Browsable'])) {
            $model->browsable = $map['Browsable'];
        }
        if (isset($map['BypassCacheRead'])) {
            $model->bypassCacheRead = $map['BypassCacheRead'];
        }
        if (isset($map['CacheMode'])) {
            $model->cacheMode = $map['CacheMode'];
        }
        if (isset($map['ClientSideCmk'])) {
            $model->clientSideCmk = $map['ClientSideCmk'];
        }
        if (isset($map['ClientSideEncryption'])) {
            $model->clientSideEncryption = $map['ClientSideEncryption'];
        }
        if (isset($map['DirectIO'])) {
            $model->directIO = $map['DirectIO'];
        }
        if (isset($map['DownloadLimit'])) {
            $model->downloadLimit = $map['DownloadLimit'];
        }
        if (isset($map['FastReclaim'])) {
            $model->fastReclaim = $map['FastReclaim'];
        }
        if (isset($map['FrontendLimit'])) {
            $model->frontendLimit = $map['FrontendLimit'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['IgnoreDelete'])) {
            $model->ignoreDelete = $map['IgnoreDelete'];
        }
        if (isset($map['InPlace'])) {
            $model->inPlace = $map['InPlace'];
        }
        if (isset($map['KmsRotatePeriod'])) {
            $model->kmsRotatePeriod = $map['KmsRotatePeriod'];
        }
        if (isset($map['LagPeriod'])) {
            $model->lagPeriod = $map['LagPeriod'];
        }
        if (isset($map['LocalFilePath'])) {
            $model->localFilePath = $map['LocalFilePath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NfsV4Optimization'])) {
            $model->nfsV4Optimization = $map['NfsV4Optimization'];
        }
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssBucketSsl'])) {
            $model->ossBucketSsl = $map['OssBucketSsl'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['PartialSyncPaths'])) {
            $model->partialSyncPaths = $map['PartialSyncPaths'];
        }
        if (isset($map['PathPrefix'])) {
            $model->pathPrefix = $map['PathPrefix'];
        }
        if (isset($map['PollingInterval'])) {
            $model->pollingInterval = $map['PollingInterval'];
        }
        if (isset($map['ReadOnlyClientList'])) {
            $model->readOnlyClientList = $map['ReadOnlyClientList'];
        }
        if (isset($map['ReadOnlyUserList'])) {
            $model->readOnlyUserList = $map['ReadOnlyUserList'];
        }
        if (isset($map['ReadWriteClientList'])) {
            $model->readWriteClientList = $map['ReadWriteClientList'];
        }
        if (isset($map['ReadWriteUserList'])) {
            $model->readWriteUserList = $map['ReadWriteUserList'];
        }
        if (isset($map['RemoteSync'])) {
            $model->remoteSync = $map['RemoteSync'];
        }
        if (isset($map['RemoteSyncDownload'])) {
            $model->remoteSyncDownload = $map['RemoteSyncDownload'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServerSideAlgorithm'])) {
            $model->serverSideAlgorithm = $map['ServerSideAlgorithm'];
        }
        if (isset($map['ServerSideCmk'])) {
            $model->serverSideCmk = $map['ServerSideCmk'];
        }
        if (isset($map['ServerSideEncryption'])) {
            $model->serverSideEncryption = $map['ServerSideEncryption'];
        }
        if (isset($map['ShareProtocol'])) {
            $model->shareProtocol = $map['ShareProtocol'];
        }
        if (isset($map['Squash'])) {
            $model->squash = $map['Squash'];
        }
        if (isset($map['SupportArchive'])) {
            $model->supportArchive = $map['SupportArchive'];
        }
        if (isset($map['TransferAcceleration'])) {
            $model->transferAcceleration = $map['TransferAcceleration'];
        }
        if (isset($map['WindowsAcl'])) {
            $model->windowsAcl = $map['WindowsAcl'];
        }

        return $model;
    }
}
