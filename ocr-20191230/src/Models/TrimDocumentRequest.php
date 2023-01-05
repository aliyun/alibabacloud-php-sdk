<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class TrimDocumentRequest extends Model
{
    /**
     * @example pdf
     *
     * @var string
     */
    public $fileType;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/TrimDocument/TrimDocument1.pdf
     *
     * @var string
     */
    public $fileURL;

    /**
     * @example html
     *
     * @var string
     */
    public $outputType;
    protected $_name = [
        'fileType'   => 'FileType',
        'fileURL'    => 'FileURL',
        'outputType' => 'OutputType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrimDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }

        return $model;
    }
}
