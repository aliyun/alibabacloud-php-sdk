<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeExcelExportRequest extends Model
{
    /**
     * @description 文件名称
     *
     * @var string
     */
    public $fileName;

    /**
     * @description 图片识别op类型
     *
     * @var string
     */
    public $imageOp;

    /**
     * @description 识别图片数量
     *
     * @var int
     */
    public $ocrImageCount;

    /**
     * @description 图片识别结果集
     *
     * @var string
     */
    public $ocrResult;

    /**
     * @description 票证类型
     *
     * @var string
     */
    public $ocrType;
    protected $_name = [
        'fileName'      => 'FileName',
        'imageOp'       => 'ImageOp',
        'ocrImageCount' => 'OcrImageCount',
        'ocrResult'     => 'OcrResult',
        'ocrType'       => 'OcrType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->imageOp) {
            $res['ImageOp'] = $this->imageOp;
        }
        if (null !== $this->ocrImageCount) {
            $res['OcrImageCount'] = $this->ocrImageCount;
        }
        if (null !== $this->ocrResult) {
            $res['OcrResult'] = $this->ocrResult;
        }
        if (null !== $this->ocrType) {
            $res['OcrType'] = $this->ocrType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeExcelExportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['ImageOp'])) {
            $model->imageOp = $map['ImageOp'];
        }
        if (isset($map['OcrImageCount'])) {
            $model->ocrImageCount = $map['OcrImageCount'];
        }
        if (isset($map['OcrResult'])) {
            $model->ocrResult = $map['OcrResult'];
        }
        if (isset($map['OcrType'])) {
            $model->ocrType = $map['OcrType'];
        }

        return $model;
    }
}
