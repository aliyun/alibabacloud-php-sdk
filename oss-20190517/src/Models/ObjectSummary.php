<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ObjectSummary extends Model
{
    /**
     * @example 5B3C1A2E053D763E1B002CC607C5A0FE1****
     *
     * @var string
     */
    public $ETag;

    /**
     * @example fun/test.jpg
     *
     * @var string
     */
    public $key;

    /**
     * @example 2012-02-24T08:42:32.000Z
     *
     * @var string
     */
    public $lastModified;

    /**
     * @var Owner
     */
    public $owner;

    /**
     * @example ongoing-request="true”
     *
     * @var string
     */
    public $resoreInfo;

    /**
     * @example 344606
     *
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @example Normal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ETag'         => 'ETag',
        'key'          => 'Key',
        'lastModified' => 'LastModified',
        'owner'        => 'Owner',
        'resoreInfo'   => 'ResoreInfo',
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
        if (null !== $this->resoreInfo) {
            $res['ResoreInfo'] = $this->resoreInfo;
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
        if (isset($map['ResoreInfo'])) {
            $model->resoreInfo = $map['ResoreInfo'];
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
