<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\GenerateVideoRequest;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1-video1.mp4
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/GenerateVideo/1-video1.mp4
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description This parameter is required.
     *
     * @example video
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fileName' => 'FileName',
        'fileUrl'  => 'FileUrl',
        'type'     => 'Type',
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
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
