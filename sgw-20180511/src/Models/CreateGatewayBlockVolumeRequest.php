<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CreateGatewayBlockVolumeRequest extends Model
{
    /**
     * @example Cache
     *
     * @var string
     */
    public $cacheMode;

    /**
     * @example false
     *
     * @var bool
     */
    public $chapEnabled;

    /**
     * @example chapInPassword
     *
     * @var string
     */
    public $chapInPassword;

    /**
     * @example chapInUser
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
     * @example gw-000dt67z4ijngqvh1***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example /dev/vdb
     *
     * @var string
     */
    public $localFilePath;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example bucketName
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
     * @example oss-cn-shanghai-internal.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @example false
     *
     * @var bool
     */
    public $recovery;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example 100
     *
     * @var int
     */
    public $size;

    /**
     * @example iSCSI
     *
     * @var string
     */
    public $volumeProtocol;
    protected $_name = [
        'cacheMode'      => 'CacheMode',
        'chapEnabled'    => 'ChapEnabled',
        'chapInPassword' => 'ChapInPassword',
        'chapInUser'     => 'ChapInUser',
        'chunkSize'      => 'ChunkSize',
        'gatewayId'      => 'GatewayId',
        'localFilePath'  => 'LocalFilePath',
        'name'           => 'Name',
        'ossBucketName'  => 'OssBucketName',
        'ossBucketSsl'   => 'OssBucketSsl',
        'ossEndpoint'    => 'OssEndpoint',
        'recovery'       => 'Recovery',
        'securityToken'  => 'SecurityToken',
        'size'           => 'Size',
        'volumeProtocol' => 'VolumeProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheMode) {
            $res['CacheMode'] = $this->cacheMode;
        }
        if (null !== $this->chapEnabled) {
            $res['ChapEnabled'] = $this->chapEnabled;
        }
        if (null !== $this->chapInPassword) {
            $res['ChapInPassword'] = $this->chapInPassword;
        }
        if (null !== $this->chapInUser) {
            $res['ChapInUser'] = $this->chapInUser;
        }
        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->localFilePath) {
            $res['LocalFilePath'] = $this->localFilePath;
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
        if (null !== $this->recovery) {
            $res['Recovery'] = $this->recovery;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->volumeProtocol) {
            $res['VolumeProtocol'] = $this->volumeProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGatewayBlockVolumeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheMode'])) {
            $model->cacheMode = $map['CacheMode'];
        }
        if (isset($map['ChapEnabled'])) {
            $model->chapEnabled = $map['ChapEnabled'];
        }
        if (isset($map['ChapInPassword'])) {
            $model->chapInPassword = $map['ChapInPassword'];
        }
        if (isset($map['ChapInUser'])) {
            $model->chapInUser = $map['ChapInUser'];
        }
        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['LocalFilePath'])) {
            $model->localFilePath = $map['LocalFilePath'];
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
        if (isset($map['Recovery'])) {
            $model->recovery = $map['Recovery'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['VolumeProtocol'])) {
            $model->volumeProtocol = $map['VolumeProtocol'];
        }

        return $model;
    }
}
