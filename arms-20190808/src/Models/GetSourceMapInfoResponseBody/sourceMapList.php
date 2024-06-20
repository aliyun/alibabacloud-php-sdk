<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSourceMapInfoResponseBody;

use AlibabaCloud\Tea\Model;

class sourceMapList extends Model
{
    /**
     * @var string
     */
    public $fid;

    /**
     * @example test.sourcemap.js
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 201223
     *
     * @var string
     */
    public $size;

    /**
     * @example 1590657842000
     *
     * @var string
     */
    public $uploadTime;

    /**
     * @example 0.0.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'fid'        => 'Fid',
        'fileName'   => 'FileName',
        'size'       => 'Size',
        'uploadTime' => 'UploadTime',
        'version'    => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fid) {
            $res['Fid'] = $this->fid;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceMapList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fid'])) {
            $model->fid = $map['Fid'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
