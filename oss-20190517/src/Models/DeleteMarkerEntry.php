<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class DeleteMarkerEntry extends Model
{
    /**
     * @var bool
     */
    public $isLatest;

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
     * @var string
     */
    public $versionId;
    protected $_name = [
        'isLatest'     => 'IsLatest',
        'key'          => 'Key',
        'lastModified' => 'LastModified',
        'owner'        => 'Owner',
        'versionId'    => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMarkerEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
