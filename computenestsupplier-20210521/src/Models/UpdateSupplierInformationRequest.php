<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateSupplierInformationRequest\deliverySettings;

class UpdateSupplierInformationRequest extends Model
{
    /**
     * @var deliverySettings
     */
    public $deliverySettings;

    /**
     * @var string
     */
    public $operationIp;

    /**
     * @var bool
     */
    public $operationMfaPresent;

    /**
     * @var string
     */
    public $regionId;

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
    public $supplierUrl;
    protected $_name = [
        'deliverySettings' => 'DeliverySettings',
        'operationIp' => 'OperationIp',
        'operationMfaPresent' => 'OperationMfaPresent',
        'regionId' => 'RegionId',
        'supplierDesc' => 'SupplierDesc',
        'supplierLogo' => 'SupplierLogo',
        'supplierUrl' => 'SupplierUrl',
    ];

    public function validate()
    {
        if (null !== $this->deliverySettings) {
            $this->deliverySettings->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliverySettings) {
            $res['DeliverySettings'] = null !== $this->deliverySettings ? $this->deliverySettings->toArray($noStream) : $this->deliverySettings;
        }

        if (null !== $this->operationIp) {
            $res['OperationIp'] = $this->operationIp;
        }

        if (null !== $this->operationMfaPresent) {
            $res['OperationMfaPresent'] = $this->operationMfaPresent;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->supplierDesc) {
            $res['SupplierDesc'] = $this->supplierDesc;
        }

        if (null !== $this->supplierLogo) {
            $res['SupplierLogo'] = $this->supplierLogo;
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
        if (isset($map['DeliverySettings'])) {
            $model->deliverySettings = deliverySettings::fromMap($map['DeliverySettings']);
        }

        if (isset($map['OperationIp'])) {
            $model->operationIp = $map['OperationIp'];
        }

        if (isset($map['OperationMfaPresent'])) {
            $model->operationMfaPresent = $map['OperationMfaPresent'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SupplierDesc'])) {
            $model->supplierDesc = $map['SupplierDesc'];
        }

        if (isset($map['SupplierLogo'])) {
            $model->supplierLogo = $map['SupplierLogo'];
        }

        if (isset($map['SupplierUrl'])) {
            $model->supplierUrl = $map['SupplierUrl'];
        }

        return $model;
    }
}
