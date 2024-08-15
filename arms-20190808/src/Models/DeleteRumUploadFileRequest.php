<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteRumUploadFileRequest extends Model
{
    /**
     * @var string
     */
    public $batchItems;

    /**
     * @description The file name, with the extension.
     *
     * @example test.js.map
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The application ID.
     *
     * This parameter is required.
     * @example atc889zkcf@d8deedfa9bf****
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
     * @description The file ID.
     *
     * @example MS4wLjAtbWFpbi4wZjM0NzRlOSxxxxxx
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
        'batchItems' => 'BatchItems',
        'fileName'   => 'FileName',
        'pid'        => 'Pid',
        'regionId'   => 'RegionId',
        'uuid'       => 'Uuid',
        'versionId'  => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchItems) {
            $res['BatchItems'] = $this->batchItems;
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
     * @return DeleteRumUploadFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchItems'])) {
            $model->batchItems = $map['BatchItems'];
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
