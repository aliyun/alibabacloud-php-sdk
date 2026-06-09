<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class ConfirmAppInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $deployArea;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $siteVersion;

    /**
     * @var string
     */
    public $trialBizId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'applicationType' => 'ApplicationType',
        'autoRenew' => 'AutoRenew',
        'clientToken' => 'ClientToken',
        'deployArea' => 'DeployArea',
        'duration' => 'Duration',
        'extend' => 'Extend',
        'paymentType' => 'PaymentType',
        'pricingCycle' => 'PricingCycle',
        'quantity' => 'Quantity',
        'siteVersion' => 'SiteVersion',
        'trialBizId' => 'TrialBizId',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deployArea) {
            $res['DeployArea'] = $this->deployArea;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        if (null !== $this->trialBizId) {
            $res['TrialBizId'] = $this->trialBizId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeployArea'])) {
            $model->deployArea = $map['DeployArea'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        if (isset($map['TrialBizId'])) {
            $model->trialBizId = $map['TrialBizId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
