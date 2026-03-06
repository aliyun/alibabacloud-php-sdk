<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForPartnerResponseBody\module;

use AlibabaCloud\Dara\Model;

class profile extends Model
{
    /**
     * @var string
     */
    public $adminUrl;

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
    public $bindCname;

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
    public $domainList;

    /**
     * @var string
     */
    public $editorUrl;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $icpbaNo;

    /**
     * @var string
     */
    public $imageList;

    /**
     * @var string
     */
    public $lxInstanceId;

    /**
     * @var string
     */
    public $ordTime;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var string
     */
    public $partnerId;

    /**
     * @var string
     */
    public $payTime;

    /**
     * @var string
     */
    public $previewUrl;

    /**
     * @var string
     */
    public $seoSite;

    /**
     * @var string
     */
    public $siteLogo;

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

    /**
     * @var string
     */
    public $textList;

    /**
     * @var string
     */
    public $thumbnail;
    protected $_name = [
        'adminUrl' => 'AdminUrl',
        'applicationType' => 'ApplicationType',
        'applicationTypeText' => 'ApplicationTypeText',
        'bindCname' => 'BindCname',
        'bizId' => 'BizId',
        'commodityCode' => 'CommodityCode',
        'customerService' => 'CustomerService',
        'deployArea' => 'DeployArea',
        'domainList' => 'DomainList',
        'editorUrl' => 'EditorUrl',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'icpbaNo' => 'IcpbaNo',
        'imageList' => 'ImageList',
        'lxInstanceId' => 'LxInstanceId',
        'ordTime' => 'OrdTime',
        'orderId' => 'OrderId',
        'orderNum' => 'OrderNum',
        'partnerId' => 'PartnerId',
        'payTime' => 'PayTime',
        'previewUrl' => 'PreviewUrl',
        'seoSite' => 'SeoSite',
        'siteLogo' => 'SiteLogo',
        'siteVersion' => 'SiteVersion',
        'siteVersionText' => 'SiteVersionText',
        'source' => 'Source',
        'templateEtag' => 'TemplateEtag',
        'templateId' => 'TemplateId',
        'textList' => 'TextList',
        'thumbnail' => 'Thumbnail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminUrl) {
            $res['AdminUrl'] = $this->adminUrl;
        }

        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }

        if (null !== $this->applicationTypeText) {
            $res['ApplicationTypeText'] = $this->applicationTypeText;
        }

        if (null !== $this->bindCname) {
            $res['BindCname'] = $this->bindCname;
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

        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }

        if (null !== $this->editorUrl) {
            $res['EditorUrl'] = $this->editorUrl;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->icpbaNo) {
            $res['IcpbaNo'] = $this->icpbaNo;
        }

        if (null !== $this->imageList) {
            $res['ImageList'] = $this->imageList;
        }

        if (null !== $this->lxInstanceId) {
            $res['LxInstanceId'] = $this->lxInstanceId;
        }

        if (null !== $this->ordTime) {
            $res['OrdTime'] = $this->ordTime;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->orderNum) {
            $res['OrderNum'] = $this->orderNum;
        }

        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }

        if (null !== $this->payTime) {
            $res['PayTime'] = $this->payTime;
        }

        if (null !== $this->previewUrl) {
            $res['PreviewUrl'] = $this->previewUrl;
        }

        if (null !== $this->seoSite) {
            $res['SeoSite'] = $this->seoSite;
        }

        if (null !== $this->siteLogo) {
            $res['SiteLogo'] = $this->siteLogo;
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

        if (null !== $this->textList) {
            $res['TextList'] = $this->textList;
        }

        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = $this->thumbnail;
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
        if (isset($map['AdminUrl'])) {
            $model->adminUrl = $map['AdminUrl'];
        }

        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }

        if (isset($map['ApplicationTypeText'])) {
            $model->applicationTypeText = $map['ApplicationTypeText'];
        }

        if (isset($map['BindCname'])) {
            $model->bindCname = $map['BindCname'];
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

        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }

        if (isset($map['EditorUrl'])) {
            $model->editorUrl = $map['EditorUrl'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['IcpbaNo'])) {
            $model->icpbaNo = $map['IcpbaNo'];
        }

        if (isset($map['ImageList'])) {
            $model->imageList = $map['ImageList'];
        }

        if (isset($map['LxInstanceId'])) {
            $model->lxInstanceId = $map['LxInstanceId'];
        }

        if (isset($map['OrdTime'])) {
            $model->ordTime = $map['OrdTime'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrderNum'])) {
            $model->orderNum = $map['OrderNum'];
        }

        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }

        if (isset($map['PayTime'])) {
            $model->payTime = $map['PayTime'];
        }

        if (isset($map['PreviewUrl'])) {
            $model->previewUrl = $map['PreviewUrl'];
        }

        if (isset($map['SeoSite'])) {
            $model->seoSite = $map['SeoSite'];
        }

        if (isset($map['SiteLogo'])) {
            $model->siteLogo = $map['SiteLogo'];
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

        if (isset($map['TextList'])) {
            $model->textList = $map['TextList'];
        }

        if (isset($map['Thumbnail'])) {
            $model->thumbnail = $map['Thumbnail'];
        }

        return $model;
    }
}
