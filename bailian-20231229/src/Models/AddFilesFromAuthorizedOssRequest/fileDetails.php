<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssRequest;

use AlibabaCloud\Tea\Model;

class fileDetails extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example this_is_temp_xxxx.pdf
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example root/path/this_is_temp_xxxx.pdf
     *
     * @var string
     */
    public $ossKey;
    protected $_name = [
        'fileName' => 'FileName',
        'ossKey' => 'OssKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        return $model;
    }
}
