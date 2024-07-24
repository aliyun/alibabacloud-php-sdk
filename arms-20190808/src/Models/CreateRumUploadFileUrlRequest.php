<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateRumUploadFileUrlRequest extends Model
{
    /**
     * @description The application name.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The type of the file. You can set this parameter to "application/zip", "text/plain", or an empty string.
     *
     * @example text/plain
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The file name.
     *
     * @example test.js.map
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The application ID.
     *
     * @example iioe7jcnuk@582846f37******
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The file type. Valid values: source-map: SourceMap files. mapping: symbol table files for Android. dsym: dSYM files for iOS.
     *
     * @example source-map
     *
     * @var string
     */
    public $sourcemapType;

    /**
     * @description The file ID.
     *
     * @example 125bdb39-a415-4503-bd96-e293925fc64c
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
        'appName'       => 'AppName',
        'contentType'   => 'ContentType',
        'fileName'      => 'FileName',
        'pid'           => 'Pid',
        'regionId'      => 'RegionId',
        'sourcemapType' => 'SourcemapType',
        'uuid'          => 'Uuid',
        'versionId'     => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateRumUploadFileUrlRequest
     */
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
