<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeVATInvoiceRequest extends Model
{
    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $fileURL;
    protected $_name = [
        'fileType' => 'FileType',
        'fileURL'  => 'FileURL',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeVATInvoiceRequest
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

        return $model;
    }
}
