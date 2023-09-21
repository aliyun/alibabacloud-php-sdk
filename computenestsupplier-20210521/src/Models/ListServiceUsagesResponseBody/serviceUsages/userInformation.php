<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceUsagesResponseBody\serviceUsages;

use AlibabaCloud\Tea\Model;

class userInformation extends Model
{
    /**
     * @example alibaba
     *
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $contactEmail;

    /**
     * @var string
     */
    public $contactNumber;

    /**
     * @var string
     */
    public $contactPerson;

    /**
     * @var string
     */
    public $contactPersonTitle;

    /**
     * @example china
     *
     * @var string
     */
    public $country;

    /**
     * @example a****@xyc.com
     *
     * @var string
     */
    public $emailAddress;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $productBusiness;

    /**
     * @var string
     */
    public $productDeliveryTypes;

    /**
     * @var string
     */
    public $productSellTypes;

    /**
     * @example 223.2.1.3.xxxx
     *
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $supplierDesc;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var string
     */
    public $supplierUrl;

    /**
     * @example 12345xxxxxx
     *
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'company'              => 'Company',
        'contactEmail'         => 'ContactEmail',
        'contactNumber'        => 'ContactNumber',
        'contactPerson'        => 'ContactPerson',
        'contactPersonTitle'   => 'ContactPersonTitle',
        'country'              => 'Country',
        'emailAddress'         => 'EmailAddress',
        'industry'             => 'Industry',
        'name'                 => 'Name',
        'productBusiness'      => 'ProductBusiness',
        'productDeliveryTypes' => 'ProductDeliveryTypes',
        'productSellTypes'     => 'ProductSellTypes',
        'source'               => 'Source',
        'supplierDesc'         => 'SupplierDesc',
        'supplierName'         => 'SupplierName',
        'supplierUrl'          => 'SupplierUrl',
        'telephone'            => 'Telephone',
        'title'                => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->company) {
            $res['Company'] = $this->company;
        }
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }
        if (null !== $this->contactNumber) {
            $res['ContactNumber'] = $this->contactNumber;
        }
        if (null !== $this->contactPerson) {
            $res['ContactPerson'] = $this->contactPerson;
        }
        if (null !== $this->contactPersonTitle) {
            $res['ContactPersonTitle'] = $this->contactPersonTitle;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->emailAddress) {
            $res['EmailAddress'] = $this->emailAddress;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productBusiness) {
            $res['ProductBusiness'] = $this->productBusiness;
        }
        if (null !== $this->productDeliveryTypes) {
            $res['ProductDeliveryTypes'] = $this->productDeliveryTypes;
        }
        if (null !== $this->productSellTypes) {
            $res['ProductSellTypes'] = $this->productSellTypes;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->supplierDesc) {
            $res['SupplierDesc'] = $this->supplierDesc;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->supplierUrl) {
            $res['SupplierUrl'] = $this->supplierUrl;
        }
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInformation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Company'])) {
            $model->company = $map['Company'];
        }
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }
        if (isset($map['ContactNumber'])) {
            $model->contactNumber = $map['ContactNumber'];
        }
        if (isset($map['ContactPerson'])) {
            $model->contactPerson = $map['ContactPerson'];
        }
        if (isset($map['ContactPersonTitle'])) {
            $model->contactPersonTitle = $map['ContactPersonTitle'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['EmailAddress'])) {
            $model->emailAddress = $map['EmailAddress'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductBusiness'])) {
            $model->productBusiness = $map['ProductBusiness'];
        }
        if (isset($map['ProductDeliveryTypes'])) {
            $model->productDeliveryTypes = $map['ProductDeliveryTypes'];
        }
        if (isset($map['ProductSellTypes'])) {
            $model->productSellTypes = $map['ProductSellTypes'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SupplierDesc'])) {
            $model->supplierDesc = $map['SupplierDesc'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }
        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
