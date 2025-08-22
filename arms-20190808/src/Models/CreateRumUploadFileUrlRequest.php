<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class CreateRumUploadFileUrlRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourcemapType;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'appName' => 'AppName',
        'contentType' => 'ContentType',
        'fileName' => 'FileName',
        'pid' => 'Pid',
        'regionId' => 'RegionId',
        'sourcemapType' => 'SourcemapType',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sourcemapType) {
            $res['SourcemapType'] = $this->sourcemapType;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SourcemapType'])) {
            $model->sourcemapType = $map['SourcemapType'];
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
