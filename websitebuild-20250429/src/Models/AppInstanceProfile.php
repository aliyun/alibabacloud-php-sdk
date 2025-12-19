<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class AppInstanceProfile extends Model
{
    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $applicationTypeText;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $customerService;

    /**
     * @var string
     */
    public $deployArea;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ordTime;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $payTime;

    /**
     * @var string
     */
    public $seoSite;

    /**
     * @var string
     */
    public $siteVersion;

    /**
     * @var string
     */
    public $siteVersionText;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $templateEtag;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'applicationType' => 'ApplicationType',
        'applicationTypeText' => 'ApplicationTypeText',
        'bizId' => 'BizId',
        'commodityCode' => 'CommodityCode',
        'customerService' => 'CustomerService',
        'deployArea' => 'DeployArea',
        'instanceId' => 'InstanceId',
        'ordTime' => 'OrdTime',
        'orderId' => 'OrderId',
        'payTime' => 'PayTime',
        'seoSite' => 'SeoSite',
        'siteVersion' => 'SiteVersion',
        'siteVersionText' => 'SiteVersionText',
        'source' => 'Source',
        'templateEtag' => 'TemplateEtag',
        'templateId' => 'TemplateId',
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

        if (null !== $this->applicationTypeText) {
            $res['ApplicationTypeText'] = $this->applicationTypeText;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->customerService) {
            $res['CustomerService'] = $this->customerService;
        }

        if (null !== $this->deployArea) {
            $res['DeployArea'] = $this->deployArea;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ordTime) {
            $res['OrdTime'] = $this->ordTime;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->payTime) {
            $res['PayTime'] = $this->payTime;
        }

        if (null !== $this->seoSite) {
            $res['SeoSite'] = $this->seoSite;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        if (null !== $this->siteVersionText) {
            $res['SiteVersionText'] = $this->siteVersionText;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->templateEtag) {
            $res['TemplateEtag'] = $this->templateEtag;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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

        if (isset($map['ApplicationTypeText'])) {
            $model->applicationTypeText = $map['ApplicationTypeText'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['CustomerService'])) {
            $model->customerService = $map['CustomerService'];
        }

        if (isset($map['DeployArea'])) {
            $model->deployArea = $map['DeployArea'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrdTime'])) {
            $model->ordTime = $map['OrdTime'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PayTime'])) {
            $model->payTime = $map['PayTime'];
        }

        if (isset($map['SeoSite'])) {
            $model->seoSite = $map['SeoSite'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        if (isset($map['SiteVersionText'])) {
            $model->siteVersionText = $map['SiteVersionText'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['TemplateEtag'])) {
            $model->templateEtag = $map['TemplateEtag'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
