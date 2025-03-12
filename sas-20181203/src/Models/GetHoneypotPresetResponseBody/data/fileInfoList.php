<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotPresetResponseBody\data;

use AlibabaCloud\Tea\Model;

class fileInfoList extends Model
{
    /**
     * @description The ID of the uploaded file.
     *
     * @example HONEYPOT_FILE/1765_167040128****
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The name of the uploaded file.
     *
     * @example HONEYPOT_FILE****
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The download URL.
     *
     * @example http://aegis****
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
