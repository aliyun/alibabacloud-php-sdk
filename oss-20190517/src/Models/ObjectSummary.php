<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ObjectSummary extends Model
{
    /**
     * @var string
     */
    public $ETag;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var Owner
     */
    public $owner;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'ETag'         => 'ETag',
        'key'          => 'Key',
        'lastModified' => 'LastModified',
        'owner'        => 'Owner',
        'size'         => 'Size',
        'storageClass' => 'StorageClass',
        'type'         => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ObjectSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
