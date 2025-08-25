<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class ImageBlindPicWatermarkAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $functionType;

    /**
     * @var Stream
     */
    public $logoURLObject;

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
     * @var Stream
     */
    public $watermarkImageURLObject;
    protected $_name = [
        'functionType' => 'FunctionType',
        'logoURLObject' => 'LogoURL',
        'originImageURLObject' => 'OriginImageURL',
        'outputFileType' => 'OutputFileType',
        'qualityFactor' => 'QualityFactor',
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

        if (null !== $this->logoURLObject) {
            $res['LogoURL'] = $this->logoURLObject;
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

        if (isset($map['LogoURL'])) {
            $model->logoURLObject = $map['LogoURL'];
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

        if (isset($map['WatermarkImageURL'])) {
            $model->watermarkImageURLObject = $map['WatermarkImageURL'];
        }

        return $model;
    }
}
