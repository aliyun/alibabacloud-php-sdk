<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateOrGetVirtualLicenseOrderResponseBody extends Model
{
    /**
     * @var int
     */
    public $activatedCodeCount;

    /**
     * @var int
     */
    public $activationCodeQuota;

    /**
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @var bool
     */
    public $allowEmptySystemIdentifier;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $isVirtualOrder;

    /**
     * @var bool
     */
    public $isVirtualOrderFrozen;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $packageValidity;

    /**
     * @var string
     */
    public $purchaseChannel;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $virtualOrderId;
    protected $_name = [
        'activatedCodeCount' => 'ActivatedCodeCount',
        'activationCodeQuota' => 'ActivationCodeQuota',
        'aliyunOrderId' => 'AliyunOrderId',
        'allowEmptySystemIdentifier' => 'AllowEmptySystemIdentifier',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'isVirtualOrder' => 'IsVirtualOrder',
        'isVirtualOrderFrozen' => 'IsVirtualOrderFrozen',
        'packageType' => 'PackageType',
        'packageValidity' => 'PackageValidity',
        'purchaseChannel' => 'PurchaseChannel',
        'requestId' => 'RequestId',
        'virtualOrderId' => 'VirtualOrderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
