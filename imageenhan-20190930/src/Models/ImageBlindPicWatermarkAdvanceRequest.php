<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ImageBlindPicWatermarkAdvanceRequest extends Model
{
    /**
     * @example encode_pic
     *
     * @var string
     */
    public $functionType;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxxxx.jpg
     *
     * @var Stream
     */
    public $logoURLObject;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxxxx.jpg
     *
     * @var Stream
     */
    public $originImageURLObject;

    /**
     * @example jpg
     *
     * @var string
     */
    public $outputFileType;

    /**
     * @example 100
     *
     * @var int
     */
    public $qualityFactor;

    /**
     * @example https://viapi-doc.oss-cn-shanghai.aliyuncs.com/imageenhan/xxxxx.jpg
     *
     * @var Stream
     */
    public $watermarkImageURLObject;
    protected $_name = [
        'functionType'            => 'FunctionType',
        'logoURLObject'           => 'LogoURL',
        'originImageURLObject'    => 'OriginImageURL',
        'outputFileType'          => 'OutputFileType',
        'qualityFactor'           => 'QualityFactor',
        'watermarkImageURLObject' => 'WatermarkImageURL',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ImageBlindPicWatermarkAdvanceRequest
     */
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
