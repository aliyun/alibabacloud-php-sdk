<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ImageBlindPicWatermarkAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $originImageURLObject;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $logoURL;

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
    public $watermarkImageURL;
    protected $_name = [
        'originImageURLObject' => 'OriginImageURLObject',
        'functionType'         => 'FunctionType',
        'logoURL'              => 'LogoURL',
        'outputFileType'       => 'OutputFileType',
        'qualityFactor'        => 'QualityFactor',
        'watermarkImageURL'    => 'WatermarkImageURL',
    ];

    public function validate()
    {
        Model::validateRequired('originImageURLObject', $this->originImageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originImageURLObject) {
            $res['OriginImageURLObject'] = $this->originImageURLObject;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->logoURL) {
            $res['LogoURL'] = $this->logoURL;
        }
        if (null !== $this->outputFileType) {
            $res['OutputFileType'] = $this->outputFileType;
        }
        if (null !== $this->qualityFactor) {
            $res['QualityFactor'] = $this->qualityFactor;
        }
        if (null !== $this->watermarkImageURL) {
            $res['WatermarkImageURL'] = $this->watermarkImageURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageBlindPicWatermarkAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginImageURLObject'])) {
            $model->originImageURLObject = $map['OriginImageURLObject'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['LogoURL'])) {
            $model->logoURL = $map['LogoURL'];
        }
        if (isset($map['OutputFileType'])) {
            $model->outputFileType = $map['OutputFileType'];
        }
        if (isset($map['QualityFactor'])) {
            $model->qualityFactor = $map['QualityFactor'];
        }
        if (isset($map['WatermarkImageURL'])) {
            $model->watermarkImageURL = $map['WatermarkImageURL'];
        }

        return $model;
    }
}
