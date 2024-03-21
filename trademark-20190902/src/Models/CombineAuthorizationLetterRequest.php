<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class CombineAuthorizationLetterRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $applicantType;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $contactPhone;

    /**
     * @var string
     */
    public $contactPostcode;

    /**
     * @var string
     */
    public $materialId;

    /**
     * @var string
     */
    public $materialName;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @var string
     */
    public $personalType;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $tmProduceType;

    /**
     * @var string
     */
    public $trademarkName;
    protected $_name = [
        'address'         => 'Address',
        'applicantType'   => 'ApplicantType',
        'contactName'     => 'ContactName',
        'contactPhone'    => 'ContactPhone',
        'contactPostcode' => 'ContactPostcode',
        'materialId'      => 'MaterialId',
        'materialName'    => 'MaterialName',
        'nationality'     => 'Nationality',
        'personalType'    => 'PersonalType',
        'principalName'   => 'PrincipalName',
        'tmProduceType'   => 'TmProduceType',
        'trademarkName'   => 'TrademarkName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->applicantType) {
            $res['ApplicantType'] = $this->applicantType;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactPhone) {
            $res['ContactPhone'] = $this->contactPhone;
        }
        if (null !== $this->contactPostcode) {
            $res['ContactPostcode'] = $this->contactPostcode;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->materialName) {
            $res['MaterialName'] = $this->materialName;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = $this->nationality;
        }
        if (null !== $this->personalType) {
            $res['PersonalType'] = $this->personalType;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->tmProduceType) {
            $res['TmProduceType'] = $this->tmProduceType;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CombineAuthorizationLetterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['ApplicantType'])) {
            $model->applicantType = $map['ApplicantType'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactPhone'])) {
            $model->contactPhone = $map['ContactPhone'];
        }
        if (isset($map['ContactPostcode'])) {
            $model->contactPostcode = $map['ContactPostcode'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['MaterialName'])) {
            $model->materialName = $map['MaterialName'];
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }
        if (isset($map['PersonalType'])) {
            $model->personalType = $map['PersonalType'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['TmProduceType'])) {
            $model->tmProduceType = $map['TmProduceType'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }

        return $model;
    }
}
