<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeVATInvoiceAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $fileType;

    /**
     * @var Stream
     */
    public $fileURLObject;
    protected $_name = [
        'fileType'      => 'FileType',
        'fileURLObject' => 'FileURL',
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
        if (null !== $this->fileURLObject) {
            $res['FileURL'] = $this->fileURLObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeVATInvoiceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURLObject = $map['FileURL'];
        }

        return $model;
    }
}
