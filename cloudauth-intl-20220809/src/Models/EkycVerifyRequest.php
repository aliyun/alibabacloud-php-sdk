<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class EkycVerifyRequest extends Model
{
    /**
     * @example T
     *
     * @var string
     */
    public $authorize;

    /**
     * @example F
     *
     * @var string
     */
    public $crop;

    /**
     * @var string
     */
    public $docName;

    /**
     * @example 410***************
     *
     * @var string
     */
    public $docNo;

    /**
     * @example 00000001
     *
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $facePictureBase64;

    /**
     * @example https://digital-face-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg
     *
     * @var string
     */
    public $facePictureUrl;

    /**
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
     * @example e0c34a77f5ac40a5aa5e6ed20c353888
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $merchantUserId;

    /**
     * @example eKYC_MIN
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'authorize'          => 'Authorize',
        'crop'               => 'Crop',
        'docName'            => 'DocName',
        'docNo'              => 'DocNo',
        'docType'            => 'DocType',
        'facePictureBase64'  => 'FacePictureBase64',
        'facePictureUrl'     => 'FacePictureUrl',
        'idOcrPictureBase64' => 'IdOcrPictureBase64',
        'idOcrPictureUrl'    => 'IdOcrPictureUrl',
        'merchantBizId'      => 'MerchantBizId',
        'merchantUserId'     => 'MerchantUserId',
        'productCode'        => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return EkycVerifyRequest
     */
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
