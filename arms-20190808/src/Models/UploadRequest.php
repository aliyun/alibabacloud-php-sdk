<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UploadRequest extends Model
{
    /**
     * @description The version of the SourceMap file.
     *
     * @example 0.0.0
     *
     * @var string
     */
    public $edition;

    /**
     * @description The content of the SourceMap file.
     *
     * @example test file content
     *
     * @var string
     */
    public $file;

    /**
     * @description The name of the SourceMap file.
     *
     * @example test.js.map
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The application ID.
     *
     * Log on to the **ARMS console**. In the left-side navigation pane, choose **Browser Monitoring** > **Browser Monitoring**. On the Browser Monitoring page, click the name of an application. The URL in the address bar contains the process ID (PID) of the application. The PID is indicated in the pid=xxx format. The PID is usually percent encoded as xxx%40xxx. You must modify this value to remove the percent encoding. For example, if the PID in the URL is eb4zdose6v%409781be0f44d\*\*\*\*, you must replace %40 with @ to obtain eb4zdose6v@9781be0f44d\*\*\*\*.
     * @example b590lhguqs@8cc3f6354******
     *
     * @var string
     */
    public $pid;

    /**
     * @description The ID of the region to which the SourceMap file is uploaded.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description We recommend that you do not specify this parameter.
     *
     * @example null
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'edition'  => 'Edition',
        'file'     => 'File',
        'fileName' => 'FileName',
        'pid'      => 'Pid',
        'regionId' => 'RegionId',
        'version'  => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->file) {
            $res['File'] = $this->file;
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
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['File'])) {
            $model->file = $map['File'];
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
