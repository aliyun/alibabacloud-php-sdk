<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetSupplierInformationResponseBody\deliverySettings;
use AlibabaCloud\Tea\Model;

class GetSupplierInformationResponseBody extends Model
{
    /**
     * @description The delivery settings.
     *
     * @var deliverySettings
     */
    public $deliverySettings;

    /**
     * @description Whether to enable reseller
     *
     * @example true
     *
     * @var bool
     */
    public $enableReseller;

    /**
     * @description The Ip of the operation.
     *
     * @example 10.xxx.xxx.xxx/101
     *
     * @var string
     */
    public $operationIp;

    /**
     * @description The MFA of the operation.
     *
     * @example true
     *
     * @var bool
     */
    public $operationMfaPresent;

    /**
     * @description The request ID.
     *
     * @example 51945B04-6AA6-410D-93BA-236E0248B104
     *
     * @var string
     */
    public $requestId;

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
     * @example http://example.aliyundoc.com/cover/34DB-4F4C-9373-003AA060****.png
     *
     * @var string
     */
    public $supplierLogo;

    /**
     * @description The name of the service provider.
     *
     * @example Alibaba Cloud
     *
     * @var string
     */
    public $supplierName;

    /**
     * @description The URL of the service provider.
     *
     * @example http://www.xxx.xxx.cn
     *
     * @var string
     */
    public $supplierUrl;
    protected $_name = [
        'deliverySettings'    => 'DeliverySettings',
        'enableReseller'      => 'EnableReseller',
        'operationIp'         => 'OperationIp',
        'operationMfaPresent' => 'OperationMfaPresent',
        'requestId'           => 'RequestId',
        'supplierDesc'        => 'SupplierDesc',
        'supplierLogo'        => 'SupplierLogo',
        'supplierName'        => 'SupplierName',
        'supplierUrl'         => 'SupplierUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliverySettings) {
            $res['DeliverySettings'] = null !== $this->deliverySettings ? $this->deliverySettings->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSupplierInformationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
