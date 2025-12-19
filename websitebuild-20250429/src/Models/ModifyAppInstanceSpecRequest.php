<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class ModifyAppInstanceSpecRequest extends Model
{
    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $deployArea;

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
    public $siteVersion;
    protected $_name = [
        'applicationType' => 'ApplicationType',
        'bizId' => 'BizId',
        'clientToken' => 'ClientToken',
        'deployArea' => 'DeployArea',
        'extend' => 'Extend',
        'paymentType' => 'PaymentType',
        'siteVersion' => 'SiteVersion',
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

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deployArea) {
            $res['DeployArea'] = $this->deployArea;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
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

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeployArea'])) {
            $model->deployArea = $map['DeployArea'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
