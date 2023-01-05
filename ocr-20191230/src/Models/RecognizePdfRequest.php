<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizePdfRequest extends Model
{
    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/ocr/xxxx.pdf
     *
     * @var string
     */
    public $fileURL;
    protected $_name = [
        'fileURL' => 'FileURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizePdfRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }

        return $model;
    }
}
