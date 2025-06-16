<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class CreateSupplierRegistrationRequest extends Model
{
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
     * @var string[]
     */
    public $productDeliveryTypes;

    /**
     * @var string
     */
    public $productPublishTime;

    /**
     * @var string[]
     */
    public $productSellTypes;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resellBusinessDesc;

    /**
     * @var string
     */
    public $suggestion;

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
    public $supplierUrl;
    protected $_name = [
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
        'regionId' => 'RegionId',
        'resellBusinessDesc' => 'ResellBusinessDesc',
        'suggestion' => 'Suggestion',
        'supplierDesc' => 'SupplierDesc',
        'supplierLogo' => 'SupplierLogo',
        'supplierName' => 'SupplierName',
        'supplierNameEn' => 'SupplierNameEn',
        'supplierUrl' => 'SupplierUrl',
    ];

    public function validate()
    {
        if (\is_array($this->productDeliveryTypes)) {
            Model::validateArray($this->productDeliveryTypes);
        }
        if (\is_array($this->productSellTypes)) {
            Model::validateArray($this->productSellTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->productDeliveryTypes)) {
                $res['ProductDeliveryTypes'] = [];
                $n1 = 0;
                foreach ($this->productDeliveryTypes as $item1) {
                    $res['ProductDeliveryTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->productPublishTime) {
            $res['ProductPublishTime'] = $this->productPublishTime;
        }

        if (null !== $this->productSellTypes) {
            if (\is_array($this->productSellTypes)) {
                $res['ProductSellTypes'] = [];
                $n1 = 0;
                foreach ($this->productSellTypes as $item1) {
                    $res['ProductSellTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->productDeliveryTypes = [];
                $n1 = 0;
                foreach ($map['ProductDeliveryTypes'] as $item1) {
                    $model->productDeliveryTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProductPublishTime'])) {
            $model->productPublishTime = $map['ProductPublishTime'];
        }

        if (isset($map['ProductSellTypes'])) {
            if (!empty($map['ProductSellTypes'])) {
                $model->productSellTypes = [];
                $n1 = 0;
                foreach ($map['ProductSellTypes'] as $item1) {
                    $model->productSellTypes[$n1] = $item1;
                    ++$n1;
                }
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
