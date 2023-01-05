<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizePdfAdvanceRequest extends Model
{
    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/ocr/xxxx.pdf
     *
     * @var Stream
     */
    public $fileURLObject;
    protected $_name = [
        'fileURLObject' => 'FileURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileURLObject) {
            $res['FileURL'] = $this->fileURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizePdfAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileURL'])) {
            $model->fileURLObject = $map['FileURL'];
        }

        return $model;
    }
}
