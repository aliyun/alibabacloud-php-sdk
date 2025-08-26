<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Dara\Model;
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
        'fileType' => 'FileType',
        'fileURLObject' => 'FileURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
