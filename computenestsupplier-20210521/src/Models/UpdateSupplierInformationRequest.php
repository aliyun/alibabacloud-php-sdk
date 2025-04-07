<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateSupplierInformationRequest\deliverySettings;
use AlibabaCloud\Tea\Model;

class UpdateSupplierInformationRequest extends Model
{
    /**
     * @description The delivery settings.
     *
     * @var deliverySettings
     */
    public $deliverySettings;

    /**
     * @description The Ip of operation.
     *
     * @example 192.xxx.xxx.xxx/16,192.xxx.xxx.xxx
     *
     * @var string
     */
    public $operationIp;

    /**
     * @description The MFA of operation.
     *
     * @example true
     *
     * @var bool
     */
    public $operationMfaPresent;

    /**
     * @description Region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

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
     * @description The URL of the service provider.
     *
     * @example http://www.xxx.xxx.cn
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliverySettings) {
            $res['DeliverySettings'] = null !== $this->deliverySettings ? $this->deliverySettings->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return UpdateSupplierInformationRequest
     */
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
