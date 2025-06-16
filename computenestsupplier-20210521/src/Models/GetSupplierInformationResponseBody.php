<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetSupplierInformationResponseBody\deliverySettings;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetSupplierInformationResponseBody\supportContacts;

class GetSupplierInformationResponseBody extends Model
{
    /**
     * @var string
     */
    public $acrNamespace;

    /**
     * @var deliverySettings
     */
    public $deliverySettings;

    /**
     * @var bool
     */
    public $enableReseller;

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
    public $requestId;

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
    public $supplierUrl;

    /**
     * @var supportContacts[]
     */
    public $supportContacts;
    protected $_name = [
        'acrNamespace' => 'AcrNamespace',
        'deliverySettings' => 'DeliverySettings',
        'enableReseller' => 'EnableReseller',
        'operationIp' => 'OperationIp',
        'operationMfaPresent' => 'OperationMfaPresent',
        'requestId' => 'RequestId',
        'supplierDesc' => 'SupplierDesc',
        'supplierLogo' => 'SupplierLogo',
        'supplierName' => 'SupplierName',
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
        if (null !== $this->acrNamespace) {
            $res['AcrNamespace'] = $this->acrNamespace;
        }

        if (null !== $this->deliverySettings) {
            $res['DeliverySettings'] = null !== $this->deliverySettings ? $this->deliverySettings->toArray($noStream) : $this->deliverySettings;
        }

        if (null !== $this->enableReseller) {
            $res['EnableReseller'] = $this->enableReseller;
        }

        if (null !== $this->operationIp) {
            $res['OperationIp'] = $this->operationIp;
        }

        if (null !== $this->operationMfaPresent) {
            $res['OperationMfaPresent'] = $this->operationMfaPresent;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AcrNamespace'])) {
            $model->acrNamespace = $map['AcrNamespace'];
        }

        if (isset($map['DeliverySettings'])) {
            $model->deliverySettings = deliverySettings::fromMap($map['DeliverySettings']);
        }

        if (isset($map['EnableReseller'])) {
            $model->enableReseller = $map['EnableReseller'];
        }

        if (isset($map['OperationIp'])) {
            $model->operationIp = $map['OperationIp'];
        }

        if (isset($map['OperationMfaPresent'])) {
            $model->operationMfaPresent = $map['OperationMfaPresent'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
