<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumUploadFilesResponseBody\data;

use AlibabaCloud\Dara\Model;

class fileList extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var mixed
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'fileName' => 'FileName',
        'lastModifiedTime' => 'LastModifiedTime',
        'size' => 'Size',
        'uuid' => 'Uuid',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
