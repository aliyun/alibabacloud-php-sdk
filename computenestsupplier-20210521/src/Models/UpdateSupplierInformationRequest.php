<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateSupplierInformationRequest\deliverySettings;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateSupplierInformationRequest\supportContacts;

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

    /**
     * @var supportContacts[]
     */
    public $supportContacts;
    protected $_name = [
        'deliverySettings' => 'DeliverySettings',
        'operationIp' => 'OperationIp',
        'operationMfaPresent' => 'OperationMfaPresent',
        'regionId' => 'RegionId',
        'supplierDesc' => 'SupplierDesc',
        'supplierLogo' => 'SupplierLogo',
        'supplierUrl' => 'SupplierUrl',
        'supportContacts' => 'SupportContacts',
    ];

    public function validate()
    {
        if (null !== $this->deliverySettings) {
            $this->deliverySettings->validate();
        }
        if (\is_array($this->supportContacts)) {
            Model::validateArray($this->supportContacts);
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

        if (null !== $this->supportContacts) {
            if (\is_array($this->supportContacts)) {
                $res['SupportContacts'] = [];
                $n1 = 0;
                foreach ($this->supportContacts as $item1) {
                    $res['SupportContacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['SupportContacts'])) {
            if (!empty($map['SupportContacts'])) {
                $model->supportContacts = [];
                $n1 = 0;
                foreach ($map['SupportContacts'] as $item1) {
                    $model->supportContacts[$n1] = supportContacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
