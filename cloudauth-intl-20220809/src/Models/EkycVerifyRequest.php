<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;

class EkycVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $authorize;

    /**
     * @var string
     */
    public $crop;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $docNo;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $facePictureBase64;

    /**
     * @var string
     */
    public $facePictureUrl;

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
    public $productCode;
    protected $_name = [
        'authorize' => 'Authorize',
        'crop' => 'Crop',
        'docName' => 'DocName',
        'docNo' => 'DocNo',
        'docType' => 'DocType',
        'facePictureBase64' => 'FacePictureBase64',
        'facePictureUrl' => 'FacePictureUrl',
        'idOcrPictureBase64' => 'IdOcrPictureBase64',
        'idOcrPictureUrl' => 'IdOcrPictureUrl',
        'idThreshold' => 'IdThreshold',
        'merchantBizId' => 'MerchantBizId',
        'merchantUserId' => 'MerchantUserId',
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorize) {
            $res['Authorize'] = $this->authorize;
        }

        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }

        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }

        if (null !== $this->docNo) {
            $res['DocNo'] = $this->docNo;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->facePictureBase64) {
            $res['FacePictureBase64'] = $this->facePictureBase64;
        }

        if (null !== $this->facePictureUrl) {
            $res['FacePictureUrl'] = $this->facePictureUrl;
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

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['Authorize'])) {
            $model->authorize = $map['Authorize'];
        }

        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }

        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }

        if (isset($map['DocNo'])) {
            $model->docNo = $map['DocNo'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['FacePictureBase64'])) {
            $model->facePictureBase64 = $map['FacePictureBase64'];
        }

        if (isset($map['FacePictureUrl'])) {
            $model->facePictureUrl = $map['FacePictureUrl'];
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

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
