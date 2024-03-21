<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class CheckMaterialValidityRequest extends Model
{
    /**
     * @var string
     */
    public $businessLicenseOssKey;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $idCardName;

    /**
     * @var string
     */
    public $idCardNumber;

    /**
     * @var string
     */
    public $idCardOssKey;

    /**
     * @var int
     */
    public $materialId;

    /**
     * @var int
     */
    public $materialRegion;

    /**
     * @var int
     */
    public $materialType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $personalType;
    protected $_name = [
        'businessLicenseOssKey' => 'BusinessLicenseOssKey',
        'cardNumber'            => 'CardNumber',
        'idCardName'            => 'IdCardName',
        'idCardNumber'          => 'IdCardNumber',
        'idCardOssKey'          => 'IdCardOssKey',
        'materialId'            => 'MaterialId',
        'materialRegion'        => 'MaterialRegion',
        'materialType'          => 'MaterialType',
        'name'                  => 'Name',
        'personalType'          => 'PersonalType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessLicenseOssKey) {
            $res['BusinessLicenseOssKey'] = $this->businessLicenseOssKey;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->idCardName) {
            $res['IdCardName'] = $this->idCardName;
        }
        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
        }
        if (null !== $this->idCardOssKey) {
            $res['IdCardOssKey'] = $this->idCardOssKey;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->materialRegion) {
            $res['MaterialRegion'] = $this->materialRegion;
        }
        if (null !== $this->materialType) {
            $res['MaterialType'] = $this->materialType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->personalType) {
            $res['PersonalType'] = $this->personalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckMaterialValidityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessLicenseOssKey'])) {
            $model->businessLicenseOssKey = $map['BusinessLicenseOssKey'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['IdCardName'])) {
            $model->idCardName = $map['IdCardName'];
        }
        if (isset($map['IdCardNumber'])) {
            $model->idCardNumber = $map['IdCardNumber'];
        }
        if (isset($map['IdCardOssKey'])) {
            $model->idCardOssKey = $map['IdCardOssKey'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['MaterialRegion'])) {
            $model->materialRegion = $map['MaterialRegion'];
        }
        if (isset($map['MaterialType'])) {
            $model->materialType = $map['MaterialType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PersonalType'])) {
            $model->personalType = $map['PersonalType'];
        }

        return $model;
    }
}
