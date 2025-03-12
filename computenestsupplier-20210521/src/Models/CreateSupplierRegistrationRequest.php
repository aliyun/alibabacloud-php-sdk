<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class CreateSupplierRegistrationRequest extends Model
{
    /**
     * @description Contact email
     *
     * This parameter is required.
     * @example xxxx@xxx.com
     *
     * @var string
     */
    public $contactEmail;

    /**
     * @description Contact number
     *
     * This parameter is required.
     * @example 186xxxxxxxxx
     *
     * @var string
     */
    public $contactNumber;

    /**
     * @description Contact person
     *
     * This parameter is required.
     * @example Mike
     *
     * @var string
     */
    public $contactPerson;

    /**
     * @description Contact person tiltle
     *
     * This parameter is required.
     * @example CTO
     *
     * @var string
     */
    public $contactPersonTitle;

    /**
     * @description Whether to enable the resell mode
     *
     * @example true
     *
     * @var bool
     */
    public $enableResellerMode;

    /**
     * @description Annual product revenue
     *
     * @example 1000
     *
     * @var string
     */
    public $productAnnualRevenue;

    /**
     * @description The business of product
     *
     * @example AI
     *
     * @var string
     */
    public $productBusiness;

    /**
     * @description Product delivery type
     *
     * This parameter is required.
     * @var string[]
     */
    public $productDeliveryTypes;

    /**
     * @description The publish time of product
     *
     * @example 2020.10.10
     *
     * @var string
     */
    public $productPublishTime;

    /**
     * @description Product sell type
     *
     * This parameter is required.
     * @var string[]
     */
    public $productSellTypes;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The description of resell business.
     *
     * @example empty
     *
     * @var string
     */
    public $resellBusinessDesc;

    /**
     * @description The demands of service providers.
     *
     * @example empty
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The description of service provider.
     *
     * This parameter is required.
     * @example Test supplier
     *
     * @var string
     */
    public $supplierDesc;

    /**
     * @description The Logo of service provider.
     *
     * @example http://example.aliyundoc.com/cover/34DB-4F4C-9373-003AA060****.png
     *
     * @var string
     */
    public $supplierLogo;

    /**
     * @description The name of the service provider.
     *
     * This parameter is required.
     * @example Alibaba Cloud
     *
     * @var string
     */
    public $supplierName;

    /**
     * @description The english name of the service provider.
     *
     * This parameter is required.
     * @example Alibaba Cloud
     *
     * @var string
     */
    public $supplierNameEn;

    /**
     * @description The URL of the service provider.
     *
     * This parameter is required.
     * @example http://www.xxx.xxx.cn
     *
     * @var string
     */
    public $supplierUrl;
    protected $_name = [
        'contactEmail'         => 'ContactEmail',
        'contactNumber'        => 'ContactNumber',
        'contactPerson'        => 'ContactPerson',
        'contactPersonTitle'   => 'ContactPersonTitle',
        'enableResellerMode'   => 'EnableResellerMode',
        'productAnnualRevenue' => 'ProductAnnualRevenue',
        'productBusiness'      => 'ProductBusiness',
        'productDeliveryTypes' => 'ProductDeliveryTypes',
        'productPublishTime'   => 'ProductPublishTime',
        'productSellTypes'     => 'ProductSellTypes',
        'regionId'             => 'RegionId',
        'resellBusinessDesc'   => 'ResellBusinessDesc',
        'suggestion'           => 'Suggestion',
        'supplierDesc'         => 'SupplierDesc',
        'supplierLogo'         => 'SupplierLogo',
        'supplierName'         => 'SupplierName',
        'supplierNameEn'       => 'SupplierNameEn',
        'supplierUrl'          => 'SupplierUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->enableResellerMode) {
            $res['EnableResellerMode'] = $this->enableResellerMode;
        }
        if (null !== $this->productAnnualRevenue) {
            $res['ProductAnnualRevenue'] = $this->productAnnualRevenue;
        }
        if (null !== $this->productBusiness) {
            $res['ProductBusiness'] = $this->productBusiness;
        }
        if (null !== $this->productDeliveryTypes) {
            $res['ProductDeliveryTypes'] = $this->productDeliveryTypes;
        }
        if (null !== $this->productPublishTime) {
            $res['ProductPublishTime'] = $this->productPublishTime;
        }
        if (null !== $this->productSellTypes) {
            $res['ProductSellTypes'] = $this->productSellTypes;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resellBusinessDesc) {
            $res['ResellBusinessDesc'] = $this->resellBusinessDesc;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->supplierDesc) {
            $res['SupplierDesc'] = $this->supplierDesc;
        }
        if (null !== $this->supplierLogo) {
            $res['SupplierLogo'] = $this->supplierLogo;
        }
        if (null !== $this->supplierName) {
            $res['SupplierName'] = $this->supplierName;
        }
        if (null !== $this->supplierNameEn) {
            $res['SupplierNameEn'] = $this->supplierNameEn;
        }
        if (null !== $this->supplierUrl) {
            $res['SupplierUrl'] = $this->supplierUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSupplierRegistrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['EnableResellerMode'])) {
            $model->enableResellerMode = $map['EnableResellerMode'];
        }
        if (isset($map['ProductAnnualRevenue'])) {
            $model->productAnnualRevenue = $map['ProductAnnualRevenue'];
        }
        if (isset($map['ProductBusiness'])) {
            $model->productBusiness = $map['ProductBusiness'];
        }
        if (isset($map['ProductDeliveryTypes'])) {
            if (!empty($map['ProductDeliveryTypes'])) {
                $model->productDeliveryTypes = $map['ProductDeliveryTypes'];
            }
        }
        if (isset($map['ProductPublishTime'])) {
            $model->productPublishTime = $map['ProductPublishTime'];
        }
        if (isset($map['ProductSellTypes'])) {
            if (!empty($map['ProductSellTypes'])) {
                $model->productSellTypes = $map['ProductSellTypes'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResellBusinessDesc'])) {
            $model->resellBusinessDesc = $map['ResellBusinessDesc'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['SupplierDesc'])) {
            $model->supplierDesc = $map['SupplierDesc'];
        }
        if (isset($map['SupplierLogo'])) {
            $model->supplierLogo = $map['SupplierLogo'];
        }
        if (isset($map['SupplierName'])) {
            $model->supplierName = $map['SupplierName'];
        }
        if (isset($map['SupplierNameEn'])) {
            $model->supplierNameEn = $map['SupplierNameEn'];
        }
        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }

        return $model;
    }
}
