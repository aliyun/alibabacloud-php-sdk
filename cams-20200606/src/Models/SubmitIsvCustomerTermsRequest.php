<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class SubmitIsvCustomerTermsRequest extends Model
{
    /**
     * @var string
     */
    public $businessDesc;

    /**
     * @var string
     */
    public $contactMail;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $custName;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $isvTerms;

    /**
     * @var string
     */
    public $officeAddress;
    protected $_name = [
        'businessDesc' => 'BusinessDesc',
        'contactMail' => 'ContactMail',
        'countryId' => 'CountryId',
        'custName' => 'CustName',
        'custSpaceId' => 'CustSpaceId',
        'isvTerms' => 'IsvTerms',
        'officeAddress' => 'OfficeAddress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessDesc) {
            $res['BusinessDesc'] = $this->businessDesc;
        }

        if (null !== $this->contactMail) {
            $res['ContactMail'] = $this->contactMail;
        }

        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }

        if (null !== $this->custName) {
            $res['CustName'] = $this->custName;
        }

        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        if (null !== $this->isvTerms) {
            $res['IsvTerms'] = $this->isvTerms;
        }

        if (null !== $this->officeAddress) {
            $res['OfficeAddress'] = $this->officeAddress;
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
        if (isset($map['BusinessDesc'])) {
            $model->businessDesc = $map['BusinessDesc'];
        }

        if (isset($map['ContactMail'])) {
            $model->contactMail = $map['ContactMail'];
        }

        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }

        if (isset($map['CustName'])) {
            $model->custName = $map['CustName'];
        }

        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        if (isset($map['IsvTerms'])) {
            $model->isvTerms = $map['IsvTerms'];
        }

        if (isset($map['OfficeAddress'])) {
            $model->officeAddress = $map['OfficeAddress'];
        }

        return $model;
    }
}
