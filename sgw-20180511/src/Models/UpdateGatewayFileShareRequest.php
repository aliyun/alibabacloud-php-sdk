<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayFileShareRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $accessBasedEnumeration;

    /**
     * @example 0
     *
     * @var int
     */
    public $backendLimit;

    /**
     * @example false
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
     * @example b1e08822-1e9c-4f8e-9dd1-a740cb200***
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
     * @example true
     *
     * @var bool
     */
    public $fastReclaim;

    /**
     * @example 0
     *
     * @var int
     */
    public $frontendLimit;

    /**
     * @example gw-000c6hshwukkbryp****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example true
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
     * @example NFStest
     *
     * @var string
     */
    public $indexId;

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
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $nfsV4Optimization;

    /**
     * @example 36000
     *
     * @var int
     */
    public $pollingInterval;

    /**
     * @example 172.16.146.100
     *
     * @var string
     */
    public $readOnlyClientList;

    /**
     * @example user1,user2
     *
     * @var string
     */
    public $readOnlyUserList;

    /**
     * @example 172.16.146.100
     *
     * @var string
     */
    public $readWriteClientList;

    /**
     * @example user1,user2
     *
     * @var string
     */
    public $readWriteUserList;

    /**
     * @example true
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
     * @example b1e08822-1e9c-4f8e-9dd1-a740cb200***
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
        'indexId'                => 'IndexId',
        'kmsRotatePeriod'        => 'KmsRotatePeriod',
        'lagPeriod'              => 'LagPeriod',
        'name'                   => 'Name',
        'nfsV4Optimization'      => 'NfsV4Optimization',
        'pollingInterval'        => 'PollingInterval',
        'readOnlyClientList'     => 'ReadOnlyClientList',
        'readOnlyUserList'       => 'ReadOnlyUserList',
        'readWriteClientList'    => 'ReadWriteClientList',
        'readWriteUserList'      => 'ReadWriteUserList',
        'remoteSync'             => 'RemoteSync',
        'remoteSyncDownload'     => 'RemoteSyncDownload',
        'securityToken'          => 'SecurityToken',
        'serverSideCmk'          => 'ServerSideCmk',
        'serverSideEncryption'   => 'ServerSideEncryption',
        'squash'                 => 'Squash',
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
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->kmsRotatePeriod) {
            $res['KmsRotatePeriod'] = $this->kmsRotatePeriod;
        }
        if (null !== $this->lagPeriod) {
            $res['LagPeriod'] = $this->lagPeriod;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nfsV4Optimization) {
            $res['NfsV4Optimization'] = $this->nfsV4Optimization;
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
        if (null !== $this->serverSideCmk) {
            $res['ServerSideCmk'] = $this->serverSideCmk;
        }
        if (null !== $this->serverSideEncryption) {
            $res['ServerSideEncryption'] = $this->serverSideEncryption;
        }
        if (null !== $this->squash) {
            $res['Squash'] = $this->squash;
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
     * @return UpdateGatewayFileShareRequest
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
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['KmsRotatePeriod'])) {
            $model->kmsRotatePeriod = $map['KmsRotatePeriod'];
        }
        if (isset($map['LagPeriod'])) {
            $model->lagPeriod = $map['LagPeriod'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NfsV4Optimization'])) {
            $model->nfsV4Optimization = $map['NfsV4Optimization'];
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
        if (isset($map['ServerSideCmk'])) {
            $model->serverSideCmk = $map['ServerSideCmk'];
        }
        if (isset($map['ServerSideEncryption'])) {
            $model->serverSideEncryption = $map['ServerSideEncryption'];
        }
        if (isset($map['Squash'])) {
            $model->squash = $map['Squash'];
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
