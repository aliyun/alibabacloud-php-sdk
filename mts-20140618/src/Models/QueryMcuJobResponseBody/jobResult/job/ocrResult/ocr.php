<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\ocrResult;

use AlibabaCloud\Tea\Model;

class ocr extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $ocrText;

    /**
     * @var string
     */
    public $imageId;
    protected $_name = [
        'time'     => 'Time',
        'imageUrl' => 'ImageUrl',
        'ocrText'  => 'OcrText',
        'imageId'  => 'ImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->ocrText) {
            $res['OcrText'] = $this->ocrText;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ocr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['OcrText'])) {
            $model->ocrText = $map['OcrText'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        return $model;
    }
}
