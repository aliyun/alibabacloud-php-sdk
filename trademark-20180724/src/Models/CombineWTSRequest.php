<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CombineWTSRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $contact;

    /**
     * @var string
     */
    public $contactAddressPost;

    /**
     * @var string
     */
    public $contactMobile;

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
    public $principalName;

    /**
     * @var string
     */
    public $tmNum;

    /**
     * @var string
     */
    public $tmProduceType;

    /**
     * @var string
     */
    public $trademarkName;

    /**
     * @var string
     */
    public $wtsType;
    protected $_name = [
        'address'            => 'Address',
        'contact'            => 'Contact',
        'contactAddressPost' => 'ContactAddressPost',
        'contactMobile'      => 'ContactMobile',
        'materialId'         => 'MaterialId',
        'materialName'       => 'MaterialName',
        'nationality'        => 'Nationality',
        'principalName'      => 'PrincipalName',
        'tmNum'              => 'TmNum',
        'tmProduceType'      => 'TmProduceType',
        'trademarkName'      => 'TrademarkName',
        'wtsType'            => 'WtsType',
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
        if (null !== $this->contact) {
            $res['Contact'] = $this->contact;
        }
        if (null !== $this->contactAddressPost) {
            $res['ContactAddressPost'] = $this->contactAddressPost;
        }
        if (null !== $this->contactMobile) {
            $res['ContactMobile'] = $this->contactMobile;
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
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->tmNum) {
            $res['TmNum'] = $this->tmNum;
        }
        if (null !== $this->tmProduceType) {
            $res['TmProduceType'] = $this->tmProduceType;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }
        if (null !== $this->wtsType) {
            $res['WtsType'] = $this->wtsType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CombineWTSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Contact'])) {
            $model->contact = $map['Contact'];
        }
        if (isset($map['ContactAddressPost'])) {
            $model->contactAddressPost = $map['ContactAddressPost'];
        }
        if (isset($map['ContactMobile'])) {
            $model->contactMobile = $map['ContactMobile'];
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
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['TmNum'])) {
            $model->tmNum = $map['TmNum'];
        }
        if (isset($map['TmProduceType'])) {
            $model->tmProduceType = $map['TmProduceType'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }
        if (isset($map['WtsType'])) {
            $model->wtsType = $map['WtsType'];
        }

        return $model;
    }
}
