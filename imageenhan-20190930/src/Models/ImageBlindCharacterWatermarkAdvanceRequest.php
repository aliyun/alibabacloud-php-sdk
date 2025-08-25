<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class ImageBlindCharacterWatermarkAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $functionType;

    /**
     * @var Stream
     */
    public $originImageURLObject;

    /**
     * @var string
     */
    public $outputFileType;

    /**
     * @var int
     */
    public $qualityFactor;

    /**
     * @var string
     */
    public $text;

    /**
     * @var Stream
     */
    public $watermarkImageURLObject;
    protected $_name = [
        'functionType' => 'FunctionType',
        'originImageURLObject' => 'OriginImageURL',
        'outputFileType' => 'OutputFileType',
        'qualityFactor' => 'QualityFactor',
        'text' => 'Text',
        'watermarkImageURLObject' => 'WatermarkImageURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }

        if (null !== $this->originImageURLObject) {
            $res['OriginImageURL'] = $this->originImageURLObject;
        }

        if (null !== $this->outputFileType) {
            $res['OutputFileType'] = $this->outputFileType;
        }

        if (null !== $this->qualityFactor) {
            $res['QualityFactor'] = $this->qualityFactor;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->watermarkImageURLObject) {
            $res['WatermarkImageURL'] = $this->watermarkImageURLObject;
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
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }

        if (isset($map['OriginImageURL'])) {
            $model->originImageURLObject = $map['OriginImageURL'];
        }

        if (isset($map['OutputFileType'])) {
            $model->outputFileType = $map['OutputFileType'];
        }

        if (isset($map['QualityFactor'])) {
            $model->qualityFactor = $map['QualityFactor'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['WatermarkImageURL'])) {
            $model->watermarkImageURLObject = $map['WatermarkImageURL'];
        }

        return $model;
    }
}
