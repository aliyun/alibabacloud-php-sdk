<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListSupplierRegistrationsResponseBody;

use AlibabaCloud\Tea\Model;

class supplierRegistrations extends Model
{
    /**
     * @description The comment of this registration.
     *
     * @example empty
     *
     * @var string
     */
    public $comment;

    /**
     * @description Contact email
     *
     * @example test@163.com
     *
     * @var string
     */
    public $contactEmail;

    /**
     * @description Contact number
     *
     * @example 135xxxxxxxx
     *
     * @var string
     */
    public $contactNumber;

    /**
     * @description Contact person
     *
     * @example Mike
     *
     * @var string
     */
    public $contactPerson;

    /**
     * @description Contact person tiltle.
     *
     * @example CTO
     *
     * @var string
     */
    public $contactPersonTitle;

    /**
     * @description Whether to enable the resell mode.
     *
     * @example false
     *
     * @var bool
     */
    public $enableResellerMode;

    /**
     * @description Annual product revenue
     *
     * @example empty
     *
     * @var string
     */
    public $productAnnualRevenue;

    /**
     * @description The business of product.
     *
     * @example AI
     *
     * @var string
     */
    public $productBusiness;

    /**
     * @description Product delivery type，Valid values:
     *
     * SaaS
     * License
     * API
     * DesktopSoftware
     * Others
     *
     * @example SaaS
     *
     * @var string
     */
    public $productDeliveryTypes;

    /**
     * @description The publish time of product.
     *
     * @example 2024.10.24
     *
     * @var string
     */
    public $productPublishTime;

    /**
     * @description Product sell type, Valid values:
     *
     * - Direct
     * - Channel
     *
     * @example Direct
     *
     * @var string
     */
    public $productSellTypes;

    /**
     * @description The registration ID.
     *
     * @example sr-xxx
     *
     * @var string
     */
    public $registrationId;

    /**
     * @description The description of resell business.
     *
     * @example empty
     *
     * @var string
     */
    public $resellBusinessDesc;

    /**
     * @description The deployment state of the registration. Valid values:
     *
     * - Submitted
     * - Approved
     * - Rejected
     *
     * @example Submitted
     *
     * @var string
     */
    public $status;

    /**
     * @description The submit time of this registration.
     *
     * @example 2025-01-22 09:47:58
     *
     * @var string
     */
    public $submitTime;

    /**
     * @description The description of service provider.
     *
     * @example Test supplier
     *
     * @var string
     */
    public $supplierDesc;

    /**
     * @description The Logo of service provider.
     *
     * @example https://service-info-public.oss-cn-hangzhou.aliyuncs.com/xxx/service-xxx/xxx.png
     *
     * @var string
     */
    public $supplierLogo;

    /**
     * @description The name of the service provider.
     *
     * @example Aliibaba Cloud
     *
     * @var string
     */
    public $supplierName;

    /**
     * @description The english name of the service provider.
     *
     * @example Alibaba Cloud ComputeNest
     *
     * @var string
     */
    public $supplierNameEn;

    /**
     * @description The Alibaba Cloud account ID of the service provider.
     *
     * @example 1256xxx23434
     *
     * @var string
     */
    public $supplierUid;

    /**
     * @description The URL of the service provider.
     *
     * @example https://www.guangbao-uni.com
     *
     * @var string
     */
    public $supplierUrl;
    protected $_name = [
        'comment' => 'Comment',
        'contactEmail' => 'ContactEmail',
        'contactNumber' => 'ContactNumber',
        'contactPerson' => 'ContactPerson',
        'contactPersonTitle' => 'ContactPersonTitle',
        'enableResellerMode' => 'EnableResellerMode',
        'productAnnualRevenue' => 'ProductAnnualRevenue',
        'productBusiness' => 'ProductBusiness',
        'productDeliveryTypes' => 'ProductDeliveryTypes',
        'productPublishTime' => 'ProductPublishTime',
        'productSellTypes' => 'ProductSellTypes',
        'registrationId' => 'RegistrationId',
        'resellBusinessDesc' => 'ResellBusinessDesc',
        'status' => 'Status',
        'submitTime' => 'SubmitTime',
        'supplierDesc' => 'SupplierDesc',
        'supplierLogo' => 'SupplierLogo',
        'supplierName' => 'SupplierName',
        'supplierNameEn' => 'SupplierNameEn',
        'supplierUid' => 'SupplierUid',
        'supplierUrl' => 'SupplierUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
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
        if (null !== $this->registrationId) {
            $res['RegistrationId'] = $this->registrationId;
        }
        if (null !== $this->resellBusinessDesc) {
            $res['ResellBusinessDesc'] = $this->resellBusinessDesc;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
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
        if (null !== $this->supplierUid) {
            $res['SupplierUid'] = $this->supplierUid;
        }
        if (null !== $this->supplierUrl) {
            $res['SupplierUrl'] = $this->supplierUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supplierRegistrations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
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
            $model->productDeliveryTypes = $map['ProductDeliveryTypes'];
        }
        if (isset($map['ProductPublishTime'])) {
            $model->productPublishTime = $map['ProductPublishTime'];
        }
        if (isset($map['ProductSellTypes'])) {
            $model->productSellTypes = $map['ProductSellTypes'];
        }
        if (isset($map['RegistrationId'])) {
            $model->registrationId = $map['RegistrationId'];
        }
        if (isset($map['ResellBusinessDesc'])) {
            $model->resellBusinessDesc = $map['ResellBusinessDesc'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
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
        if (isset($map['SupplierUid'])) {
            $model->supplierUid = $map['SupplierUid'];
        }
        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }

        return $model;
    }
}
