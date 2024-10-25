<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeLicenseOrdersResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $activatedCodeCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $activationCodeQuota;

    /**
     * @example 227638319690519
     *
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @example false
     *
     * @var bool
     */
    public $allowEmptySystemIdentifier;

    /**
     * @example PG
     *
     * @var string
     */
    public $engine;

    /**
     * @example 2022-02-11 03:14:15
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2022-02-11 03:14:15
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example false
     *
     * @var bool
     */
    public $isVirtualOrder;

    /**
     * @example false
     *
     * @var bool
     */
    public $isVirtualOrderFrozen;

    /**
     * @example single_node_subscribe
     *
     * @var string
     */
    public $packageType;

    /**
     * @example 1 year
     *
     * @var string
     */
    public $packageValidity;

    /**
     * @example aliyun_public
     *
     * @var string
     */
    public $purchaseChannel;

    /**
     * @example 227638319690519
     *
     * @var string
     */
    public $virtualAliyunOrderId;
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
        'virtualAliyunOrderId'       => 'VirtualAliyunOrderId',
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
        if (null !== $this->virtualAliyunOrderId) {
            $res['VirtualAliyunOrderId'] = $this->virtualAliyunOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
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
        if (isset($map['VirtualAliyunOrderId'])) {
            $model->virtualAliyunOrderId = $map['VirtualAliyunOrderId'];
        }

        return $model;
    }
}
