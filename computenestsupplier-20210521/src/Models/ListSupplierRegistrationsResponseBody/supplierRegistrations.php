<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListSupplierRegistrationsResponseBody;

use AlibabaCloud\Dara\Model;

class supplierRegistrations extends Model
{
    /**
     * @var string
     */
    public $comment;

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
     * @var bool
     */
    public $enableResellerMode;

    /**
     * @var string
     */
    public $productAnnualRevenue;

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
    public $productPublishTime;

    /**
     * @var string
     */
    public $productSellTypes;

    /**
     * @var string
     */
    public $registrationId;

    /**
     * @var string
     */
    public $resellBusinessDesc;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $supplierDesc;

    /**
     * @var string
     */
    public $supplierLogo;

    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var string
     */
    public $supplierNameEn;

    /**
     * @var string
     */
    public $supplierUid;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
