<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class IdnAuthorityVerifyIntlAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $birthDate;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $idNumber;

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
    public $mobile;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $sourceFacePicture;

    /**
     * @var Stream
     */
    public $sourceFacePictureFileObject;

    /**
     * @var string
     */
    public $sourceFacePictureUrl;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'birthDate' => 'BirthDate',
        'email' => 'Email',
        'fullName' => 'FullName',
        'idNumber' => 'IdNumber',
        'merchantBizId' => 'MerchantBizId',
        'merchantUserId' => 'MerchantUserId',
        'mobile' => 'Mobile',
        'productCode' => 'ProductCode',
        'sceneCode' => 'SceneCode',
        'sourceFacePicture' => 'SourceFacePicture',
        'sourceFacePictureFileObject' => 'SourceFacePictureFile',
        'sourceFacePictureUrl' => 'SourceFacePictureUrl',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->birthDate) {
            $res['BirthDate'] = $this->birthDate;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }

        if (null !== $this->idNumber) {
            $res['IdNumber'] = $this->idNumber;
        }

        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        if (null !== $this->merchantUserId) {
            $res['MerchantUserId'] = $this->merchantUserId;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }

        if (null !== $this->sourceFacePicture) {
            $res['SourceFacePicture'] = $this->sourceFacePicture;
        }

        if (null !== $this->sourceFacePictureFileObject) {
            $res['SourceFacePictureFile'] = $this->sourceFacePictureFileObject;
        }

        if (null !== $this->sourceFacePictureUrl) {
            $res['SourceFacePictureUrl'] = $this->sourceFacePictureUrl;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['BirthDate'])) {
            $model->birthDate = $map['BirthDate'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }

        if (isset($map['IdNumber'])) {
            $model->idNumber = $map['IdNumber'];
        }

        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        if (isset($map['MerchantUserId'])) {
            $model->merchantUserId = $map['MerchantUserId'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }

        if (isset($map['SourceFacePicture'])) {
            $model->sourceFacePicture = $map['SourceFacePicture'];
        }

        if (isset($map['SourceFacePictureFile'])) {
            $model->sourceFacePictureFileObject = $map['SourceFacePictureFile'];
        }

        if (isset($map['SourceFacePictureUrl'])) {
            $model->sourceFacePictureUrl = $map['SourceFacePictureUrl'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
