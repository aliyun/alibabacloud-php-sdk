<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeLicenseOrderDetailsResponseBody extends Model
{
    /**
     * @description The number of generated activation codes.
     *
     * @example 2
     *
     * @var int
     */
    public $activatedCodeCount;

    /**
     * @description The maximum number of activation codes that you can apply for.
     *
     * @example 8
     *
     * @var int
     */
    public $activationCodeQuota;

    /**
     * @description The Alibaba Cloud order ID (including the virtual order ID).
     *
     * @example 239618016570503
     *
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @description Indicates whether activation codes can be generated without the system identifier.
     *
     * @example false
     *
     * @var bool
     */
    public $allowEmptySystemIdentifier;

    /**
     * @description The type of the engine. Valid values: PG, Oracle, and MySQL.
     *
     * @example PG
     *
     * @var string
     */
    public $engine;

    /**
     * @description The time when the order was created.
     *
     * @example 2021-10-19 01:13:45
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the order was last updated.
     *
     * @example 2024-10-16 16:46:20
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description Indicates whether the order is a virtual order (virtual orders allow pre-generation of activation codes).
     *
     * @example false
     *
     * @var bool
     */
    public $isVirtualOrder;

    /**
     * @description Indicates whether the virtual order is frozen (activation codes cannot be generated for a frozen virtual order).
     *
     * @example false
     *
     * @var bool
     */
    public $isVirtualOrderFrozen;

    /**
     * @description The plan type. Valid values:
     *
     *   single_node_subscribe
     *   single_node_long_term
     *   primary_backup_subscribe
     *   primary_backup_long_term
     *   pre_generation_long_term
     *
     * @example pre_generation_long_term
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The validity period of the plan, which is one year (common) or thirty years (long-term).
     *
     * @example 1 year
     *
     * @var string
     */
    public $packageValidity;

    /**
     * @description The plan validity period, one year (common) or thirty years (long-term).
     *
     * @example aliyun_market
     *
     * @var string
     */
    public $purchaseChannel;

    /**
     * @description The request ID.
     *
     * @example 22C0ACF0-DD29-4B67-9190-B7A48C******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The virtual order ID.
     *
     * @example 239618016570503
     *
     * @var string
     */
    public $virtualOrderId;
    protected $_name = [
        'activatedCodeCount'         => 'ActivatedCodeCount',
        'activationCodeQuota'        => 'ActivationCodeQuota',
        'aliyunOrderId'              => 'AliyunOrderId',
        'allowEmptySystemIdentifier' => 'AllowEmptySystemIdentifier',
        'engine'                     => 'Engine',
        'gmtCreated'                 => 'GmtCreated',
        'gmtModified'                => 'GmtModified',
        'isVirtualOrder'             => 'IsVirtualOrder',
        'isVirtualOrderFrozen'       => 'IsVirtualOrderFrozen',
        'packageType'                => 'PackageType',
        'packageValidity'            => 'PackageValidity',
        'purchaseChannel'            => 'PurchaseChannel',
        'requestId'                  => 'RequestId',
        'virtualOrderId'             => 'VirtualOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activatedCodeCount) {
            $res['ActivatedCodeCount'] = $this->activatedCodeCount;
        }
        if (null !== $this->activationCodeQuota) {
            $res['ActivationCodeQuota'] = $this->activationCodeQuota;
        }
        if (null !== $this->aliyunOrderId) {
            $res['AliyunOrderId'] = $this->aliyunOrderId;
        }
        if (null !== $this->allowEmptySystemIdentifier) {
            $res['AllowEmptySystemIdentifier'] = $this->allowEmptySystemIdentifier;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->isVirtualOrder) {
            $res['IsVirtualOrder'] = $this->isVirtualOrder;
        }
        if (null !== $this->isVirtualOrderFrozen) {
            $res['IsVirtualOrderFrozen'] = $this->isVirtualOrderFrozen;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->packageValidity) {
            $res['PackageValidity'] = $this->packageValidity;
        }
        if (null !== $this->purchaseChannel) {
            $res['PurchaseChannel'] = $this->purchaseChannel;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->virtualOrderId) {
            $res['VirtualOrderId'] = $this->virtualOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLicenseOrderDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivatedCodeCount'])) {
            $model->activatedCodeCount = $map['ActivatedCodeCount'];
        }
        if (isset($map['ActivationCodeQuota'])) {
            $model->activationCodeQuota = $map['ActivationCodeQuota'];
        }
        if (isset($map['AliyunOrderId'])) {
            $model->aliyunOrderId = $map['AliyunOrderId'];
        }
        if (isset($map['AllowEmptySystemIdentifier'])) {
            $model->allowEmptySystemIdentifier = $map['AllowEmptySystemIdentifier'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IsVirtualOrder'])) {
            $model->isVirtualOrder = $map['IsVirtualOrder'];
        }
        if (isset($map['IsVirtualOrderFrozen'])) {
            $model->isVirtualOrderFrozen = $map['IsVirtualOrderFrozen'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PackageValidity'])) {
            $model->packageValidity = $map['PackageValidity'];
        }
        if (isset($map['PurchaseChannel'])) {
            $model->purchaseChannel = $map['PurchaseChannel'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VirtualOrderId'])) {
            $model->virtualOrderId = $map['VirtualOrderId'];
        }

        return $model;
    }
}
