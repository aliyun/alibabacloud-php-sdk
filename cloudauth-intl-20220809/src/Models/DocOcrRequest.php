<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class DocOcrRequest extends Model
{
    /**
     * @example 00000006
     *
     * @var string
     */
    public $docType;

    /**
     * @example F
     *
     * @var string
     */
    public $idFaceQuality;

    /**
     * @example dsjisaj***oekwodsm
     *
     * @var string
     */
    public $idOcrPictureBase64;

    /**
     * @example https://digital-cardocr-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg
     *
     * @var string
     */
    public $idOcrPictureUrl;

    /**
     * @example dso9322***dsjsd22
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $merchantUserId;

    /**
     * @example T
     *
     * @var string
     */
    public $ocr;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @example F
     *
     * @var string
     */
    public $spoof;
    protected $_name = [
        'docType'            => 'DocType',
        'idFaceQuality'      => 'IdFaceQuality',
        'idOcrPictureBase64' => 'IdOcrPictureBase64',
        'idOcrPictureUrl'    => 'IdOcrPictureUrl',
        'merchantBizId'      => 'MerchantBizId',
        'merchantUserId'     => 'MerchantUserId',
        'ocr'                => 'Ocr',
        'productCode'        => 'ProductCode',
        'spoof'              => 'Spoof',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }
        if (null !== $this->idFaceQuality) {
            $res['IdFaceQuality'] = $this->idFaceQuality;
        }
        if (null !== $this->idOcrPictureBase64) {
            $res['IdOcrPictureBase64'] = $this->idOcrPictureBase64;
        }
        if (null !== $this->idOcrPictureUrl) {
            $res['IdOcrPictureUrl'] = $this->idOcrPictureUrl;
        }
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }
        if (null !== $this->ocr) {
            $res['Ocr'] = $this->ocr;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->spoof) {
            $res['Spoof'] = $this->spoof;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DocOcrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }
        if (isset($map['IdFaceQuality'])) {
            $model->idFaceQuality = $map['IdFaceQuality'];
        }
        if (isset($map['IdOcrPictureBase64'])) {
            $model->idOcrPictureBase64 = $map['IdOcrPictureBase64'];
        }
        if (isset($map['IdOcrPictureUrl'])) {
            $model->idOcrPictureUrl = $map['IdOcrPictureUrl'];
        }
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }
        if (isset($map['Ocr'])) {
            $model->ocr = $map['Ocr'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Spoof'])) {
            $model->spoof = $map['Spoof'];
        }

        return $model;
    }
}
