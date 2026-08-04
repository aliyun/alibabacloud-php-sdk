<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountAddressInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountAddressInfoResponseBody\profileInfo\city;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountAddressInfoResponseBody\profileInfo\district;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountAddressInfoResponseBody\profileInfo\province;

class profileInfo extends Model
{
    /**
     * @var string
     */
    public $accountAttr;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $address2;

    /**
     * @var string
     */
    public $address3;

    /**
     * @var string
     */
    public $address4;

    /**
     * @var string
     */
    public $address5;

    /**
     * @var string
     */
    public $address6;

    /**
     * @var city
     */
    public $city;

    /**
     * @var district
     */
    public $district;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $havanaId;

    /**
     * @var string
     */
    public $nationalityCode;

    /**
     * @var string
     */
    public $postCode;

    /**
     * @var province
     */
    public $province;

    /**
     * @var string
     */
    public $selfServicingBusinessRegNum;

    /**
     * @var string
     */
    public $selfServicingIdentificationNum;

    /**
     * @var string
     */
    public $trueName;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'accountAttr' => 'AccountAttr',
        'address' => 'Address',
        'address2' => 'Address2',
        'address3' => 'Address3',
        'address4' => 'Address4',
        'address5' => 'Address5',
        'address6' => 'Address6',
        'city' => 'City',
        'district' => 'District',
        'email' => 'Email',
        'havanaId' => 'HavanaId',
        'nationalityCode' => 'NationalityCode',
        'postCode' => 'PostCode',
        'province' => 'Province',
        'selfServicingBusinessRegNum' => 'SelfServicingBusinessRegNum',
        'selfServicingIdentificationNum' => 'SelfServicingIdentificationNum',
        'trueName' => 'TrueName',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->city) {
            $this->city->validate();
        }
        if (null !== $this->district) {
            $this->district->validate();
        }
        if (null !== $this->province) {
            $this->province->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountAttr) {
            $res['AccountAttr'] = $this->accountAttr;
        }

        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->address2) {
            $res['Address2'] = $this->address2;
        }

        if (null !== $this->address3) {
            $res['Address3'] = $this->address3;
        }

        if (null !== $this->address4) {
            $res['Address4'] = $this->address4;
        }

        if (null !== $this->address5) {
            $res['Address5'] = $this->address5;
        }

        if (null !== $this->address6) {
            $res['Address6'] = $this->address6;
        }

        if (null !== $this->city) {
            $res['City'] = null !== $this->city ? $this->city->toArray($noStream) : $this->city;
        }

        if (null !== $this->district) {
            $res['District'] = null !== $this->district ? $this->district->toArray($noStream) : $this->district;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->havanaId) {
            $res['HavanaId'] = $this->havanaId;
        }

        if (null !== $this->nationalityCode) {
            $res['NationalityCode'] = $this->nationalityCode;
        }

        if (null !== $this->postCode) {
            $res['PostCode'] = $this->postCode;
        }

        if (null !== $this->province) {
            $res['Province'] = null !== $this->province ? $this->province->toArray($noStream) : $this->province;
        }

        if (null !== $this->selfServicingBusinessRegNum) {
            $res['SelfServicingBusinessRegNum'] = $this->selfServicingBusinessRegNum;
        }

        if (null !== $this->selfServicingIdentificationNum) {
            $res['SelfServicingIdentificationNum'] = $this->selfServicingIdentificationNum;
        }

        if (null !== $this->trueName) {
            $res['TrueName'] = $this->trueName;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AccountAttr'])) {
            $model->accountAttr = $map['AccountAttr'];
        }

        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['Address2'])) {
            $model->address2 = $map['Address2'];
        }

        if (isset($map['Address3'])) {
            $model->address3 = $map['Address3'];
        }

        if (isset($map['Address4'])) {
            $model->address4 = $map['Address4'];
        }

        if (isset($map['Address5'])) {
            $model->address5 = $map['Address5'];
        }

        if (isset($map['Address6'])) {
            $model->address6 = $map['Address6'];
        }

        if (isset($map['City'])) {
            $model->city = city::fromMap($map['City']);
        }

        if (isset($map['District'])) {
            $model->district = district::fromMap($map['District']);
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['HavanaId'])) {
            $model->havanaId = $map['HavanaId'];
        }

        if (isset($map['NationalityCode'])) {
            $model->nationalityCode = $map['NationalityCode'];
        }

        if (isset($map['PostCode'])) {
            $model->postCode = $map['PostCode'];
        }

        if (isset($map['Province'])) {
            $model->province = province::fromMap($map['Province']);
        }

        if (isset($map['SelfServicingBusinessRegNum'])) {
            $model->selfServicingBusinessRegNum = $map['SelfServicingBusinessRegNum'];
        }

        if (isset($map['SelfServicingIdentificationNum'])) {
            $model->selfServicingIdentificationNum = $map['SelfServicingIdentificationNum'];
        }

        if (isset($map['TrueName'])) {
            $model->trueName = $map['TrueName'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
