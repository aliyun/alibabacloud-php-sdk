<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvRequest\env;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @example json.jar
     *
     * @var string
     */
    public $fileName;

    /**
     * @example https://test.oss-cn-shanghai.aliyuncs.com/json.jar
     *
     * @var string
     */
    public $fileOssAddress;
    protected $_name = [
        'fileName'       => 'FileName',
        'fileOssAddress' => 'FileOssAddress',
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
        if (null !== $this->fileOssAddress) {
            $res['FileOssAddress'] = $this->fileOssAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileOssAddress'])) {
            $model->fileOssAddress = $map['FileOssAddress'];
        }

        return $model;
    }
}
