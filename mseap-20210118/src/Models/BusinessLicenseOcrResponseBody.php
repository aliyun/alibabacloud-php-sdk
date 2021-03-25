<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class BusinessLicenseOcrResponseBody extends Model
{
    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $validPeriod;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $capital;

    /**
     * @var string
     */
    public $legalPerson;

    /**
     * @var string
     */
    public $establishDate;

    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $trackId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'registerNumber' => 'RegisterNumber',
        'type'           => 'Type',
        'requestId'      => 'RequestId',
        'validPeriod'    => 'ValidPeriod',
        'address'        => 'Address',
        'capital'        => 'Capital',
        'legalPerson'    => 'LegalPerson',
        'establishDate'  => 'EstablishDate',
        'business'       => 'Business',
        'trackId'        => 'TrackId',
        'name'           => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->validPeriod) {
            $res['ValidPeriod'] = $this->validPeriod;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->capital) {
            $res['Capital'] = $this->capital;
        }
        if (null !== $this->legalPerson) {
            $res['LegalPerson'] = $this->legalPerson;
        }
        if (null !== $this->establishDate) {
            $res['EstablishDate'] = $this->establishDate;
        }
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->trackId) {
            $res['TrackId'] = $this->trackId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BusinessLicenseOcrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ValidPeriod'])) {
            $model->validPeriod = $map['ValidPeriod'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Capital'])) {
            $model->capital = $map['Capital'];
        }
        if (isset($map['LegalPerson'])) {
            $model->legalPerson = $map['LegalPerson'];
        }
        if (isset($map['EstablishDate'])) {
            $model->establishDate = $map['EstablishDate'];
        }
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['TrackId'])) {
            $model->trackId = $map['TrackId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
