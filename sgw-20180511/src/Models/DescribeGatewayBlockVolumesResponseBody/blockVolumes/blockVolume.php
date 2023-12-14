<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayBlockVolumesResponseBody\blockVolumes;

use AlibabaCloud\Tea\Model;

class blockVolume extends Model
{
    /**
     * @example 172.16.0.22
     *
     * @var string
     */
    public $address;

    /**
     * @example Cache
     *
     * @var string
     */
    public $cacheMode;

    /**
     * @example true
     *
     * @var bool
     */
    public $chapEnabled;

    /**
     * @example alex***
     *
     * @var string
     */
    public $chapInUser;

    /**
     * @example 32768
     *
     * @var int
     */
    public $chunkSize;

    /**
     * @example d-bp1a8athxvwbja18***
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
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example alex-or2020010816***
     *
     * @var string
     */
    public $indexId;

    /**
     * @example /dev/vdb
     *
     * @var string
     */
    public $localPath;

    /**
     * @description LUN ID。
     *
     * @example 0
     *
     * @var int
     */
    public $lunId;

    /**
     * @example alex
     *
     * @var string
     */
    public $name;

    /**
     * @example random***
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
     * @example 0
     *
     * @var int
     */
    public $port;

    /**
     * @example iSCSI
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 107374182400
     *
     * @var int
     */
    public $size;

    /**
     * @example clean
     *
     * @var string
     */
    public $state;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example iqn**************
     *
     * @var string
     */
    public $target;

    /**
     * @example 56342324
     *
     * @var int
     */
    public $totalDownload;

    /**
     * @example 123214564
     *
     * @var int
     */
    public $totalUpload;

    /**
     * @example 1
     *
     * @var int
     */
    public $volumeState;
    protected $_name = [
        'address'       => 'Address',
        'cacheMode'     => 'CacheMode',
        'chapEnabled'   => 'ChapEnabled',
        'chapInUser'    => 'ChapInUser',
        'chunkSize'     => 'ChunkSize',
        'diskId'        => 'DiskId',
        'diskType'      => 'DiskType',
        'enabled'       => 'Enabled',
        'indexId'       => 'IndexId',
        'localPath'     => 'LocalPath',
        'lunId'         => 'LunId',
        'name'          => 'Name',
        'ossBucketName' => 'OssBucketName',
        'ossBucketSsl'  => 'OssBucketSsl',
        'ossEndpoint'   => 'OssEndpoint',
        'port'          => 'Port',
        'protocol'      => 'Protocol',
        'size'          => 'Size',
        'state'         => 'State',
        'status'        => 'Status',
        'target'        => 'Target',
        'totalDownload' => 'TotalDownload',
        'totalUpload'   => 'TotalUpload',
        'volumeState'   => 'VolumeState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->cacheMode) {
            $res['CacheMode'] = $this->cacheMode;
        }
        if (null !== $this->chapEnabled) {
            $res['ChapEnabled'] = $this->chapEnabled;
        }
        if (null !== $this->chapInUser) {
            $res['ChapInUser'] = $this->chapInUser;
        }
        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->localPath) {
            $res['LocalPath'] = $this->localPath;
        }
        if (null !== $this->lunId) {
            $res['LunId'] = $this->lunId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->totalDownload) {
            $res['TotalDownload'] = $this->totalDownload;
        }
        if (null !== $this->totalUpload) {
            $res['TotalUpload'] = $this->totalUpload;
        }
        if (null !== $this->volumeState) {
            $res['VolumeState'] = $this->volumeState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['CacheMode'])) {
            $model->cacheMode = $map['CacheMode'];
        }
        if (isset($map['ChapEnabled'])) {
            $model->chapEnabled = $map['ChapEnabled'];
        }
        if (isset($map['ChapInUser'])) {
            $model->chapInUser = $map['ChapInUser'];
        }
        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['LocalPath'])) {
            $model->localPath = $map['LocalPath'];
        }
        if (isset($map['LunId'])) {
            $model->lunId = $map['LunId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TotalDownload'])) {
            $model->totalDownload = $map['TotalDownload'];
        }
        if (isset($map['TotalUpload'])) {
            $model->totalUpload = $map['TotalUpload'];
        }
        if (isset($map['VolumeState'])) {
            $model->volumeState = $map['VolumeState'];
        }

        return $model;
    }
}
