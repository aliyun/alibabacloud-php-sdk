<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayFileSharesResponseBody\fileShares;

use AlibabaCloud\Tea\Model;

class fileShare extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $accessBasedEnumeration;

    /**
     * @var int
     */
    public $activeMessages;

    /**
     * @example 172.16.0.44
     *
     * @var string
     */
    public $address;

    /**
     * @example 0
     *
     * @var int
     */
    public $beLimit;

    /**
     * @example true
     *
     * @var bool
     */
    public $browsable;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $bucketInfos;

    /**
     * @example false
     *
     * @var bool
     */
    public $bucketsStub;

    /**
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
     * @example d-bp1cvy8o2569jij31***
     *
     * @var string
     */
    public $diskId;

    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $diskType;

    /**
     * @example 0
     *
     * @var int
     */
    public $downloadLimit;

    /**
     * @var int
     */
    public $downloadQueue;

    /**
     * @var int
     */
    public $downloadRate;

    /**
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example sync-0001xv7je357xn8tr***
     *
     * @var string
     */
    public $expressSyncId;

    /**
     * @example false
     *
     * @var bool
     */
    public $fastReclaim;

    /**
     * @example 0
     *
     * @var int
     */
    public $feLimit;

    /**
     * @example 10200202
     *
     * @var int
     */
    public $fileNumLimit;

    /**
     * @example 70368744177664
     *
     * @var int
     */
    public $fsSizeLimit;

    /**
     * @var int
     */
    public $highWatermark;

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
    public $inRate;

    /**
     * @example NFSale***
     *
     * @var string
     */
    public $indexId;

    /**
     * @example 0
     *
     * @var string
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
    public $localPath;

    /**
     * @var int
     */
    public $lowWatermark;

    /**
     * @example MNSNotEnabled
     *
     * @var string
     */
    public $mnsHealth;

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
     * @var bool
     */
    public $noPartition;

    /**
     * @example bucket1
     *
     * @var string
     */
    public $obsoleteBuckets;

    /**
     * @example bucketA
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @example false
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
     * @example BucketHealthy
     *
     * @var string
     */
    public $ossHealth;

    /**
     * @example 0
     *
     * @var int
     */
    public $ossUsed;

    /**
     * @example 0
     *
     * @var int
     */
    public $outRate;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $partialSyncPaths;

    /**
     * @description OSS Prefix。
     *
     * @example testprefix
     *
     * @var string
     */
    public $pathPrefix;

    /**
     * @example 0
     *
     * @var int
     */
    public $pollingInterval;

    /**
     * @example SMB
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 21308227584
     *
     * @var int
     */
    public $remainingMetaSpace;

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
     * @example user1
     *
     * @var string
     */
    public $roClientList;

    /**
     * @example user2
     *
     * @var string
     */
    public $roUserList;

    /**
     * @example user3
     *
     * @var string
     */
    public $rwClientList;

    /**
     * @example user4
     *
     * @var string
     */
    public $rwUserList;

    /**
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
     * @example 85899345920
     *
     * @var int
     */
    public $size;

    /**
     * @example root_squash
     *
     * @var string
     */
    public $squash;

    /**
     * @example clean
     *
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportArchive;

    /**
     * @example -2
     *
     * @var int
     */
    public $syncProgress;

    /**
     * @var bool
     */
    public $throttling;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalDownload;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalUpload;

    /**
     * @example false
     *
     * @var bool
     */
    public $transferAcceleration;

    /**
     * @var int
     */
    public $uploadQueue;

    /**
     * @example 0
     *
     * @var int
     */
    public $used;

    /**
     * @example false
     *
     * @var bool
     */
    public $windowsAcl;
    protected $_name = [
        'accessBasedEnumeration' => 'AccessBasedEnumeration',
        'activeMessages'         => 'ActiveMessages',
        'address'                => 'Address',
        'beLimit'                => 'BeLimit',
        'browsable'              => 'Browsable',
        'bucketInfos'            => 'BucketInfos',
        'bucketsStub'            => 'BucketsStub',
        'bypassCacheRead'        => 'BypassCacheRead',
        'cacheMode'              => 'CacheMode',
        'clientSideCmk'          => 'ClientSideCmk',
        'clientSideEncryption'   => 'ClientSideEncryption',
        'directIO'               => 'DirectIO',
        'diskId'                 => 'DiskId',
        'diskType'               => 'DiskType',
        'downloadLimit'          => 'DownloadLimit',
        'downloadQueue'          => 'DownloadQueue',
        'downloadRate'           => 'DownloadRate',
        'enabled'                => 'Enabled',
        'expressSyncId'          => 'ExpressSyncId',
        'fastReclaim'            => 'FastReclaim',
        'feLimit'                => 'FeLimit',
        'fileNumLimit'           => 'FileNumLimit',
        'fsSizeLimit'            => 'FsSizeLimit',
        'highWatermark'          => 'HighWatermark',
        'ignoreDelete'           => 'IgnoreDelete',
        'inPlace'                => 'InPlace',
        'inRate'                 => 'InRate',
        'indexId'                => 'IndexId',
        'kmsRotatePeriod'        => 'KmsRotatePeriod',
        'lagPeriod'              => 'LagPeriod',
        'localPath'              => 'LocalPath',
        'lowWatermark'           => 'LowWatermark',
        'mnsHealth'              => 'MnsHealth',
        'name'                   => 'Name',
        'nfsV4Optimization'      => 'NfsV4Optimization',
        'noPartition'            => 'NoPartition',
        'obsoleteBuckets'        => 'ObsoleteBuckets',
        'ossBucketName'          => 'OssBucketName',
        'ossBucketSsl'           => 'OssBucketSsl',
        'ossEndpoint'            => 'OssEndpoint',
        'ossHealth'              => 'OssHealth',
        'ossUsed'                => 'OssUsed',
        'outRate'                => 'OutRate',
        'partialSyncPaths'       => 'PartialSyncPaths',
        'pathPrefix'             => 'PathPrefix',
        'pollingInterval'        => 'PollingInterval',
        'protocol'               => 'Protocol',
        'remainingMetaSpace'     => 'RemainingMetaSpace',
        'remoteSync'             => 'RemoteSync',
        'remoteSyncDownload'     => 'RemoteSyncDownload',
        'roClientList'           => 'RoClientList',
        'roUserList'             => 'RoUserList',
        'rwClientList'           => 'RwClientList',
        'rwUserList'             => 'RwUserList',
        'serverSideAlgorithm'    => 'ServerSideAlgorithm',
        'serverSideCmk'          => 'ServerSideCmk',
        'serverSideEncryption'   => 'ServerSideEncryption',
        'size'                   => 'Size',
        'squash'                 => 'Squash',
        'state'                  => 'State',
        'status'                 => 'Status',
        'supportArchive'         => 'SupportArchive',
        'syncProgress'           => 'SyncProgress',
        'throttling'             => 'Throttling',
        'totalDownload'          => 'TotalDownload',
        'totalUpload'            => 'TotalUpload',
        'transferAcceleration'   => 'TransferAcceleration',
        'uploadQueue'            => 'UploadQueue',
        'used'                   => 'Used',
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
        if (null !== $this->activeMessages) {
            $res['ActiveMessages'] = $this->activeMessages;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->beLimit) {
            $res['BeLimit'] = $this->beLimit;
        }
        if (null !== $this->browsable) {
            $res['Browsable'] = $this->browsable;
        }
        if (null !== $this->bucketInfos) {
            $res['BucketInfos'] = $this->bucketInfos;
        }
        if (null !== $this->bucketsStub) {
            $res['BucketsStub'] = $this->bucketsStub;
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
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->downloadLimit) {
            $res['DownloadLimit'] = $this->downloadLimit;
        }
        if (null !== $this->downloadQueue) {
            $res['DownloadQueue'] = $this->downloadQueue;
        }
        if (null !== $this->downloadRate) {
            $res['DownloadRate'] = $this->downloadRate;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->expressSyncId) {
            $res['ExpressSyncId'] = $this->expressSyncId;
        }
        if (null !== $this->fastReclaim) {
            $res['FastReclaim'] = $this->fastReclaim;
        }
        if (null !== $this->feLimit) {
            $res['FeLimit'] = $this->feLimit;
        }
        if (null !== $this->fileNumLimit) {
            $res['FileNumLimit'] = $this->fileNumLimit;
        }
        if (null !== $this->fsSizeLimit) {
            $res['FsSizeLimit'] = $this->fsSizeLimit;
        }
        if (null !== $this->highWatermark) {
            $res['HighWatermark'] = $this->highWatermark;
        }
        if (null !== $this->ignoreDelete) {
            $res['IgnoreDelete'] = $this->ignoreDelete;
        }
        if (null !== $this->inPlace) {
            $res['InPlace'] = $this->inPlace;
        }
        if (null !== $this->inRate) {
            $res['InRate'] = $this->inRate;
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
        if (null !== $this->localPath) {
            $res['LocalPath'] = $this->localPath;
        }
        if (null !== $this->lowWatermark) {
            $res['LowWatermark'] = $this->lowWatermark;
        }
        if (null !== $this->mnsHealth) {
            $res['MnsHealth'] = $this->mnsHealth;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nfsV4Optimization) {
            $res['NfsV4Optimization'] = $this->nfsV4Optimization;
        }
        if (null !== $this->noPartition) {
            $res['NoPartition'] = $this->noPartition;
        }
        if (null !== $this->obsoleteBuckets) {
            $res['ObsoleteBuckets'] = $this->obsoleteBuckets;
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
        if (null !== $this->ossHealth) {
            $res['OssHealth'] = $this->ossHealth;
        }
        if (null !== $this->ossUsed) {
            $res['OssUsed'] = $this->ossUsed;
        }
        if (null !== $this->outRate) {
            $res['OutRate'] = $this->outRate;
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->remainingMetaSpace) {
            $res['RemainingMetaSpace'] = $this->remainingMetaSpace;
        }
        if (null !== $this->remoteSync) {
            $res['RemoteSync'] = $this->remoteSync;
        }
        if (null !== $this->remoteSyncDownload) {
            $res['RemoteSyncDownload'] = $this->remoteSyncDownload;
        }
        if (null !== $this->roClientList) {
            $res['RoClientList'] = $this->roClientList;
        }
        if (null !== $this->roUserList) {
            $res['RoUserList'] = $this->roUserList;
        }
        if (null !== $this->rwClientList) {
            $res['RwClientList'] = $this->rwClientList;
        }
        if (null !== $this->rwUserList) {
            $res['RwUserList'] = $this->rwUserList;
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->squash) {
            $res['Squash'] = $this->squash;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportArchive) {
            $res['SupportArchive'] = $this->supportArchive;
        }
        if (null !== $this->syncProgress) {
            $res['SyncProgress'] = $this->syncProgress;
        }
        if (null !== $this->throttling) {
            $res['Throttling'] = $this->throttling;
        }
        if (null !== $this->totalDownload) {
            $res['TotalDownload'] = $this->totalDownload;
        }
        if (null !== $this->totalUpload) {
            $res['TotalUpload'] = $this->totalUpload;
        }
        if (null !== $this->transferAcceleration) {
            $res['TransferAcceleration'] = $this->transferAcceleration;
        }
        if (null !== $this->uploadQueue) {
            $res['UploadQueue'] = $this->uploadQueue;
        }
        if (null !== $this->used) {
            $res['Used'] = $this->used;
        }
        if (null !== $this->windowsAcl) {
            $res['WindowsAcl'] = $this->windowsAcl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileShare
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessBasedEnumeration'])) {
            $model->accessBasedEnumeration = $map['AccessBasedEnumeration'];
        }
        if (isset($map['ActiveMessages'])) {
            $model->activeMessages = $map['ActiveMessages'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['BeLimit'])) {
            $model->beLimit = $map['BeLimit'];
        }
        if (isset($map['Browsable'])) {
            $model->browsable = $map['Browsable'];
        }
        if (isset($map['BucketInfos'])) {
            $model->bucketInfos = $map['BucketInfos'];
        }
        if (isset($map['BucketsStub'])) {
            $model->bucketsStub = $map['BucketsStub'];
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
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['DownloadLimit'])) {
            $model->downloadLimit = $map['DownloadLimit'];
        }
        if (isset($map['DownloadQueue'])) {
            $model->downloadQueue = $map['DownloadQueue'];
        }
        if (isset($map['DownloadRate'])) {
            $model->downloadRate = $map['DownloadRate'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['ExpressSyncId'])) {
            $model->expressSyncId = $map['ExpressSyncId'];
        }
        if (isset($map['FastReclaim'])) {
            $model->fastReclaim = $map['FastReclaim'];
        }
        if (isset($map['FeLimit'])) {
            $model->feLimit = $map['FeLimit'];
        }
        if (isset($map['FileNumLimit'])) {
            $model->fileNumLimit = $map['FileNumLimit'];
        }
        if (isset($map['FsSizeLimit'])) {
            $model->fsSizeLimit = $map['FsSizeLimit'];
        }
        if (isset($map['HighWatermark'])) {
            $model->highWatermark = $map['HighWatermark'];
        }
        if (isset($map['IgnoreDelete'])) {
            $model->ignoreDelete = $map['IgnoreDelete'];
        }
        if (isset($map['InPlace'])) {
            $model->inPlace = $map['InPlace'];
        }
        if (isset($map['InRate'])) {
            $model->inRate = $map['InRate'];
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
        if (isset($map['LocalPath'])) {
            $model->localPath = $map['LocalPath'];
        }
        if (isset($map['LowWatermark'])) {
            $model->lowWatermark = $map['LowWatermark'];
        }
        if (isset($map['MnsHealth'])) {
            $model->mnsHealth = $map['MnsHealth'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NfsV4Optimization'])) {
            $model->nfsV4Optimization = $map['NfsV4Optimization'];
        }
        if (isset($map['NoPartition'])) {
            $model->noPartition = $map['NoPartition'];
        }
        if (isset($map['ObsoleteBuckets'])) {
            $model->obsoleteBuckets = $map['ObsoleteBuckets'];
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
        if (isset($map['OssHealth'])) {
            $model->ossHealth = $map['OssHealth'];
        }
        if (isset($map['OssUsed'])) {
            $model->ossUsed = $map['OssUsed'];
        }
        if (isset($map['OutRate'])) {
            $model->outRate = $map['OutRate'];
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RemainingMetaSpace'])) {
            $model->remainingMetaSpace = $map['RemainingMetaSpace'];
        }
        if (isset($map['RemoteSync'])) {
            $model->remoteSync = $map['RemoteSync'];
        }
        if (isset($map['RemoteSyncDownload'])) {
            $model->remoteSyncDownload = $map['RemoteSyncDownload'];
        }
        if (isset($map['RoClientList'])) {
            $model->roClientList = $map['RoClientList'];
        }
        if (isset($map['RoUserList'])) {
            $model->roUserList = $map['RoUserList'];
        }
        if (isset($map['RwClientList'])) {
            $model->rwClientList = $map['RwClientList'];
        }
        if (isset($map['RwUserList'])) {
            $model->rwUserList = $map['RwUserList'];
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Squash'])) {
            $model->squash = $map['Squash'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportArchive'])) {
            $model->supportArchive = $map['SupportArchive'];
        }
        if (isset($map['SyncProgress'])) {
            $model->syncProgress = $map['SyncProgress'];
        }
        if (isset($map['Throttling'])) {
            $model->throttling = $map['Throttling'];
        }
        if (isset($map['TotalDownload'])) {
            $model->totalDownload = $map['TotalDownload'];
        }
        if (isset($map['TotalUpload'])) {
            $model->totalUpload = $map['TotalUpload'];
        }
        if (isset($map['TransferAcceleration'])) {
            $model->transferAcceleration = $map['TransferAcceleration'];
        }
        if (isset($map['UploadQueue'])) {
            $model->uploadQueue = $map['UploadQueue'];
        }
        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }
        if (isset($map['WindowsAcl'])) {
            $model->windowsAcl = $map['WindowsAcl'];
        }

        return $model;
    }
}
