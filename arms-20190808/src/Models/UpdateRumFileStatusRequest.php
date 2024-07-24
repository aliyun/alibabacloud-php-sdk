<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateRumFileStatusRequest extends Model
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
     * @description The application ID.
     *
     * @example atc8xxxx
     * cf@d8deedfa9bf****
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
     * @description The size of the file. Unit: bytes.
     *
     * @example 20
     *
     * @var string
     */
    public $size;

    /**
     * @description The status of the file. Valid values: SUCCESS and INIT.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The unique ID of the file. If you do not set this parameter, the system automatically sets a UUID for you.
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
        'fileName'  => 'FileName',
        'pid'       => 'Pid',
        'regionId'  => 'RegionId',
        'size'      => 'Size',
        'status'    => 'Status',
        'uuid'      => 'Uuid',
        'versionId' => 'VersionId',
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
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return UpdateRumFileStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
