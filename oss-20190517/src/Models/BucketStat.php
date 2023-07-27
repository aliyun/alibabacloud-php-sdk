<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class BucketStat extends Model
{
    /**
     * @var int
     */
    public $archiveObjectCount;

    /**
     * @var int
     */
    public $archiveRealStorage;

    /**
     * @var int
     */
    public $archiveStorage;

    /**
     * @var int
     */
    public $coldArchiveObjectCount;

    /**
     * @var int
     */
    public $coldArchiveRealStorage;

    /**
     * @var int
     */
    public $coldArchiveStorage;

    /**
     * @var int
     */
    public $infrequentAccessObjectCount;

    /**
     * @var int
     */
    public $infrequentAccessRealStorage;

    /**
     * @var int
     */
    public $infrequentAccessStorage;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @var int
     */
    public $liveChannelCount;

    /**
     * @var int
     */
    public $multipartUploadCount;

    /**
     * @var int
     */
    public $objectCount;

    /**
     * @var int
     */
    public $standardObjectCount;

    /**
     * @var int
     */
    public $standardStorage;

    /**
     * @var int
     */
    public $storage;
    protected $_name = [
        'archiveObjectCount'          => 'ArchiveObjectCount',
        'archiveRealStorage'          => 'ArchiveRealStorage',
        'archiveStorage'              => 'ArchiveStorage',
        'coldArchiveObjectCount'      => 'ColdArchiveObjectCount',
        'coldArchiveRealStorage'      => 'ColdArchiveRealStorage',
        'coldArchiveStorage'          => 'ColdArchiveStorage',
        'infrequentAccessObjectCount' => 'InfrequentAccessObjectCount',
        'infrequentAccessRealStorage' => 'InfrequentAccessRealStorage',
        'infrequentAccessStorage'     => 'InfrequentAccessStorage',
        'lastModifiedTime'            => 'LastModifiedTime',
        'liveChannelCount'            => 'LiveChannelCount',
        'multipartUploadCount'        => 'MultipartUploadCount',
        'objectCount'                 => 'ObjectCount',
        'standardObjectCount'         => 'StandardObjectCount',
        'standardStorage'             => 'StandardStorage',
        'storage'                     => 'Storage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveObjectCount) {
            $res['ArchiveObjectCount'] = $this->archiveObjectCount;
        }
        if (null !== $this->archiveRealStorage) {
            $res['ArchiveRealStorage'] = $this->archiveRealStorage;
        }
        if (null !== $this->archiveStorage) {
            $res['ArchiveStorage'] = $this->archiveStorage;
        }
        if (null !== $this->coldArchiveObjectCount) {
            $res['ColdArchiveObjectCount'] = $this->coldArchiveObjectCount;
        }
        if (null !== $this->coldArchiveRealStorage) {
            $res['ColdArchiveRealStorage'] = $this->coldArchiveRealStorage;
        }
        if (null !== $this->coldArchiveStorage) {
            $res['ColdArchiveStorage'] = $this->coldArchiveStorage;
        }
        if (null !== $this->infrequentAccessObjectCount) {
            $res['InfrequentAccessObjectCount'] = $this->infrequentAccessObjectCount;
        }
        if (null !== $this->infrequentAccessRealStorage) {
            $res['InfrequentAccessRealStorage'] = $this->infrequentAccessRealStorage;
        }
        if (null !== $this->infrequentAccessStorage) {
            $res['InfrequentAccessStorage'] = $this->infrequentAccessStorage;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->liveChannelCount) {
            $res['LiveChannelCount'] = $this->liveChannelCount;
        }
        if (null !== $this->multipartUploadCount) {
            $res['MultipartUploadCount'] = $this->multipartUploadCount;
        }
        if (null !== $this->objectCount) {
            $res['ObjectCount'] = $this->objectCount;
        }
        if (null !== $this->standardObjectCount) {
            $res['StandardObjectCount'] = $this->standardObjectCount;
        }
        if (null !== $this->standardStorage) {
            $res['StandardStorage'] = $this->standardStorage;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BucketStat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveObjectCount'])) {
            $model->archiveObjectCount = $map['ArchiveObjectCount'];
        }
        if (isset($map['ArchiveRealStorage'])) {
            $model->archiveRealStorage = $map['ArchiveRealStorage'];
        }
        if (isset($map['ArchiveStorage'])) {
            $model->archiveStorage = $map['ArchiveStorage'];
        }
        if (isset($map['ColdArchiveObjectCount'])) {
            $model->coldArchiveObjectCount = $map['ColdArchiveObjectCount'];
        }
        if (isset($map['ColdArchiveRealStorage'])) {
            $model->coldArchiveRealStorage = $map['ColdArchiveRealStorage'];
        }
        if (isset($map['ColdArchiveStorage'])) {
            $model->coldArchiveStorage = $map['ColdArchiveStorage'];
        }
        if (isset($map['InfrequentAccessObjectCount'])) {
            $model->infrequentAccessObjectCount = $map['InfrequentAccessObjectCount'];
        }
        if (isset($map['InfrequentAccessRealStorage'])) {
            $model->infrequentAccessRealStorage = $map['InfrequentAccessRealStorage'];
        }
        if (isset($map['InfrequentAccessStorage'])) {
            $model->infrequentAccessStorage = $map['InfrequentAccessStorage'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['LiveChannelCount'])) {
            $model->liveChannelCount = $map['LiveChannelCount'];
        }
        if (isset($map['MultipartUploadCount'])) {
            $model->multipartUploadCount = $map['MultipartUploadCount'];
        }
        if (isset($map['ObjectCount'])) {
            $model->objectCount = $map['ObjectCount'];
        }
        if (isset($map['StandardObjectCount'])) {
            $model->standardObjectCount = $map['StandardObjectCount'];
        }
        if (isset($map['StandardStorage'])) {
            $model->standardStorage = $map['StandardStorage'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}
