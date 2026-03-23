<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class GetSendifyInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $buyResourcePackageUrl;

    /**
     * @var string
     */
    public $buyUrl;

    /**
     * @var string
     */
    public $discount;

    /**
     * @var string
     */
    public $downgradeUrl;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $learnMoreUrl;

    /**
     * @var bool
     */
    public $opened;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $renewUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $specUpgradeUrl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $supportTrial;

    /**
     * @var string
     */
    public $upgradeUrl;
    protected $_name = [
        'buyResourcePackageUrl' => 'BuyResourcePackageUrl',
        'buyUrl' => 'BuyUrl',
        'discount' => 'Discount',
        'downgradeUrl' => 'DowngradeUrl',
        'expireTime' => 'ExpireTime',
        'learnMoreUrl' => 'LearnMoreUrl',
        'opened' => 'Opened',
        'productCode' => 'ProductCode',
        'renewUrl' => 'RenewUrl',
        'requestId' => 'RequestId',
        'specUpgradeUrl' => 'SpecUpgradeUrl',
        'status' => 'Status',
        'supportTrial' => 'SupportTrial',
        'upgradeUrl' => 'UpgradeUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buyResourcePackageUrl) {
            $res['BuyResourcePackageUrl'] = $this->buyResourcePackageUrl;
        }

        if (null !== $this->buyUrl) {
            $res['BuyUrl'] = $this->buyUrl;
        }

        if (null !== $this->discount) {
            $res['Discount'] = $this->discount;
        }

        if (null !== $this->downgradeUrl) {
            $res['DowngradeUrl'] = $this->downgradeUrl;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->learnMoreUrl) {
            $res['LearnMoreUrl'] = $this->learnMoreUrl;
        }

        if (null !== $this->opened) {
            $res['Opened'] = $this->opened;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->renewUrl) {
            $res['RenewUrl'] = $this->renewUrl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->specUpgradeUrl) {
            $res['SpecUpgradeUrl'] = $this->specUpgradeUrl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportTrial) {
            $res['SupportTrial'] = $this->supportTrial;
        }

        if (null !== $this->upgradeUrl) {
            $res['UpgradeUrl'] = $this->upgradeUrl;
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
        if (isset($map['BuyResourcePackageUrl'])) {
            $model->buyResourcePackageUrl = $map['BuyResourcePackageUrl'];
        }

        if (isset($map['BuyUrl'])) {
            $model->buyUrl = $map['BuyUrl'];
        }

        if (isset($map['Discount'])) {
            $model->discount = $map['Discount'];
        }

        if (isset($map['DowngradeUrl'])) {
            $model->downgradeUrl = $map['DowngradeUrl'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['LearnMoreUrl'])) {
            $model->learnMoreUrl = $map['LearnMoreUrl'];
        }

        if (isset($map['Opened'])) {
            $model->opened = $map['Opened'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['RenewUrl'])) {
            $model->renewUrl = $map['RenewUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SpecUpgradeUrl'])) {
            $model->specUpgradeUrl = $map['SpecUpgradeUrl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportTrial'])) {
            $model->supportTrial = $map['SupportTrial'];
        }

        if (isset($map['UpgradeUrl'])) {
            $model->upgradeUrl = $map['UpgradeUrl'];
        }

        return $model;
    }
}
