<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeCardVerifyResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $cardInfo;

    /**
     * @var string
     */
    public $faceDetail;

    /**
     * @var string
     */
    public $ocrCardInfo;

    /**
     * @var string
     */
    public $pictureInfo;
    protected $_name = [
        'bizCode' => 'BizCode',
        'cardInfo' => 'CardInfo',
        'faceDetail' => 'FaceDetail',
        'ocrCardInfo' => 'OcrCardInfo',
        'pictureInfo' => 'PictureInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->cardInfo) {
            $res['CardInfo'] = $this->cardInfo;
        }

        if (null !== $this->faceDetail) {
            $res['FaceDetail'] = $this->faceDetail;
        }

        if (null !== $this->ocrCardInfo) {
            $res['OcrCardInfo'] = $this->ocrCardInfo;
        }

        if (null !== $this->pictureInfo) {
            $res['PictureInfo'] = $this->pictureInfo;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['CardInfo'])) {
            $model->cardInfo = $map['CardInfo'];
        }

        if (isset($map['FaceDetail'])) {
            $model->faceDetail = $map['FaceDetail'];
        }

        if (isset($map['OcrCardInfo'])) {
            $model->ocrCardInfo = $map['OcrCardInfo'];
        }

        if (isset($map['PictureInfo'])) {
            $model->pictureInfo = $map['PictureInfo'];
        }

        return $model;
    }
}
