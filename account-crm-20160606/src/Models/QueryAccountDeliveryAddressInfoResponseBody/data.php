<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountDeliveryAddressInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountDeliveryAddressInfoResponseBody\data\areaDivision;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountDeliveryAddressInfoResponseBody\data\cityDivision;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountDeliveryAddressInfoResponseBody\data\proviceDivision;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountDeliveryAddressInfoResponseBody\data\townDivision;

class data extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var areaDivision
     */
    public $areaDivision;

    /**
     * @var string
     */
    public $areaId;

    /**
     * @var cityDivision
     */
    public $cityDivision;

    /**
     * @var string
     */
    public $cityId;

    /**
     * @var string
     */
    public $contacts;

    /**
     * @var bool
     */
    public $defaultAddress;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $postalcode;

    /**
     * @var proviceDivision
     */
    public $proviceDivision;

    /**
     * @var string
     */
    public $proviceId;

    /**
     * @var townDivision
     */
    public $townDivision;

    /**
     * @var string
     */
    public $townId;
    protected $_name = [
        'address' => 'Address',
        'areaDivision' => 'AreaDivision',
        'areaId' => 'AreaId',
        'cityDivision' => 'CityDivision',
        'cityId' => 'CityId',
        'contacts' => 'Contacts',
        'defaultAddress' => 'DefaultAddress',
        'email' => 'Email',
        'mobile' => 'Mobile',
        'phone' => 'Phone',
        'pk' => 'Pk',
        'postalcode' => 'Postalcode',
        'proviceDivision' => 'ProviceDivision',
        'proviceId' => 'ProviceId',
        'townDivision' => 'TownDivision',
        'townId' => 'TownId',
    ];

    public function validate()
    {
        if (null !== $this->areaDivision) {
            $this->areaDivision->validate();
        }
        if (null !== $this->cityDivision) {
            $this->cityDivision->validate();
        }
        if (null !== $this->proviceDivision) {
            $this->proviceDivision->validate();
        }
        if (null !== $this->townDivision) {
            $this->townDivision->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->areaDivision) {
            $res['AreaDivision'] = null !== $this->areaDivision ? $this->areaDivision->toArray($noStream) : $this->areaDivision;
        }

        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }

        if (null !== $this->cityDivision) {
            $res['CityDivision'] = null !== $this->cityDivision ? $this->cityDivision->toArray($noStream) : $this->cityDivision;
        }

        if (null !== $this->cityId) {
            $res['CityId'] = $this->cityId;
        }

        if (null !== $this->contacts) {
            $res['Contacts'] = $this->contacts;
        }

        if (null !== $this->defaultAddress) {
            $res['DefaultAddress'] = $this->defaultAddress;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->postalcode) {
            $res['Postalcode'] = $this->postalcode;
        }

        if (null !== $this->proviceDivision) {
            $res['ProviceDivision'] = null !== $this->proviceDivision ? $this->proviceDivision->toArray($noStream) : $this->proviceDivision;
        }

        if (null !== $this->proviceId) {
            $res['ProviceId'] = $this->proviceId;
        }

        if (null !== $this->townDivision) {
            $res['TownDivision'] = null !== $this->townDivision ? $this->townDivision->toArray($noStream) : $this->townDivision;
        }

        if (null !== $this->townId) {
            $res['TownId'] = $this->townId;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['AreaDivision'])) {
            $model->areaDivision = areaDivision::fromMap($map['AreaDivision']);
        }

        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }

        if (isset($map['CityDivision'])) {
            $model->cityDivision = cityDivision::fromMap($map['CityDivision']);
        }

        if (isset($map['CityId'])) {
            $model->cityId = $map['CityId'];
        }

        if (isset($map['Contacts'])) {
            $model->contacts = $map['Contacts'];
        }

        if (isset($map['DefaultAddress'])) {
            $model->defaultAddress = $map['DefaultAddress'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['Postalcode'])) {
            $model->postalcode = $map['Postalcode'];
        }

        if (isset($map['ProviceDivision'])) {
            $model->proviceDivision = proviceDivision::fromMap($map['ProviceDivision']);
        }

        if (isset($map['ProviceId'])) {
            $model->proviceId = $map['ProviceId'];
        }

        if (isset($map['TownDivision'])) {
            $model->townDivision = townDivision::fromMap($map['TownDivision']);
        }

        if (isset($map['TownId'])) {
            $model->townId = $map['TownId'];
        }

        return $model;
    }
}
