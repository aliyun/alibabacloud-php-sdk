<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumUploadFilesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The file name.
     *
     * @example test.js.map
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The time when the file was last modified. The value is a timestamp.
     *
     * @example 1682863151000
     *
     * @var mixed
     */
    public $lastModifiedTime;

    /**
     * @description The size of the file. Unit: bytes.
     *
     * @example 1000
     *
     * @var string
     */
    public $size;

    /**
     * @description The file ID.
     *
     * @example cxxxerfewrfwerfwerffvrt
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The version number of the file.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'fileName'         => 'FileName',
        'lastModifiedTime' => 'LastModifiedTime',
        'size'             => 'Size',
        'uuid'             => 'Uuid',
        'versionId'        => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
