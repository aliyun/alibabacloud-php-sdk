<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizePdfAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $fileURLObject;
    protected $_name = [
        'fileURLObject' => 'FileURLObject',
    ];

    public function validate()
    {
        Model::validateRequired('fileURLObject', $this->fileURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileURLObject) {
            $res['FileURLObject'] = $this->fileURLObject;
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
        if (isset($map['FileURLObject'])) {
            $model->fileURLObject = $map['FileURLObject'];
        }

        return $model;
    }
}
