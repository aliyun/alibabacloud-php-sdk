<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class DeletedObject extends Model
{
    /**
     * @description description
     *
     * @var bool
     */
    public $deleteMarker;

    /**
     * @description description
     *
     * @var string
     */
    public $deleteMarkerVersionId;

    /**
     * @description description
     *
     * @var string
     */
    public $key;

    /**
     * @description description
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'deleteMarker'          => 'DeleteMarker',
        'deleteMarkerVersionId' => 'DeleteMarkerVersionId',
        'key'                   => 'Key',
        'versionId'             => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteMarker) {
            $res['DeleteMarker'] = $this->deleteMarker;
        }
        if (null !== $this->deleteMarkerVersionId) {
            $res['DeleteMarkerVersionId'] = $this->deleteMarkerVersionId;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletedObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteMarker'])) {
            $model->deleteMarker = $map['DeleteMarker'];
        }
        if (isset($map['DeleteMarkerVersionId'])) {
            $model->deleteMarkerVersionId = $map['DeleteMarkerVersionId'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
