<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class DocOcrRequest extends Model
{
    /**
     * @var string
     */
    public $cardSide;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $idFaceQuality;

    /**
     * @var string
     */
    public $idOcrPictureBase64;

    /**
     * @var string
     */
    public $idOcrPictureUrl;

    /**
     * @var string
     */
    public $idThreshold;

    /**
     * @var string
     */
    public $merchantBizId;

    /**
     * @var string
     */
    public $merchantUserId;

    /**
     * @var string
     */
    public $ocr;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $spoof;
    protected $_name = [
        'cardSide' => 'CardSide',
        'docType' => 'DocType',
        'idFaceQuality' => 'IdFaceQuality',
        'idOcrPictureBase64' => 'IdOcrPictureBase64',
        'idOcrPictureUrl' => 'IdOcrPictureUrl',
        'idThreshold' => 'IdThreshold',
        'merchantBizId' => 'MerchantBizId',
        'merchantUserId' => 'MerchantUserId',
        'ocr' => 'Ocr',
        'productCode' => 'ProductCode',
        'spoof' => 'Spoof',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardSide) {
            $res['CardSide'] = $this->cardSide;
        }

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

        if (null !== $this->idThreshold) {
            $res['IdThreshold'] = $this->idThreshold;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardSide'])) {
            $model->cardSide = $map['CardSide'];
        }

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

        if (isset($map['IdThreshold'])) {
            $model->idThreshold = $map['IdThreshold'];
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
