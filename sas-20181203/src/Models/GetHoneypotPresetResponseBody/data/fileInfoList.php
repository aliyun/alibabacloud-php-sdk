<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotPresetResponseBody\data;

use AlibabaCloud\Tea\Model;

class fileInfoList extends Model
{
    /**
     * @example HONEYPOT_FILE/1766185894104675_1670401282333
     *
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @example http://aegis-update-static-file.oss-cn-hangzhou.aliyuncs.com/HONEYPOT_FILE/1766185894104675_1670401282333?Expires=1670402201***
     *
     * @var string
     */
    public $ossUrl;
    protected $_name = [
        'fileId'   => 'FileId',
        'fileName' => 'FileName',
        'ossUrl'   => 'OssUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        return $model;
    }
}
