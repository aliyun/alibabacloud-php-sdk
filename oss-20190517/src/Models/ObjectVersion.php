<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ObjectVersion extends Model
{
    /**
     * @description The entity tag
     *
     * @var string
     */
    public $ETag;

    /**
     * @description Indicates whether the version is the current version
     *
     * @var bool
     */
    public $isLatest;

    /**
     * @description The name of the object
     *
     * @var string
     */
    public $key;

    /**
     * @description The last modified time of the object
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description The information about the bucket owner
     *
     * @var Owner
     */
    public $owner;

    /**
     * @description The size of the returned object
     *
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @description The version ID of the object
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'ETag'         => 'ETag',
        'isLatest'     => 'IsLatest',
        'key'          => 'Key',
        'lastModified' => 'LastModified',
        'owner'        => 'Owner',
        'size'         => 'Size',
        'storageClass' => 'StorageClass',
        'versionId'    => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }
        if (null !== $this->isLatest) {
            $res['IsLatest'] = $this->isLatest;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ObjectVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }
        if (isset($map['IsLatest'])) {
            $model->isLatest = $map['IsLatest'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['Owner'])) {
            $model->owner = Owner::fromMap($map['Owner']);
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
