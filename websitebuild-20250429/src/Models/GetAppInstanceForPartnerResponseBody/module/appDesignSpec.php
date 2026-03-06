<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceForPartnerResponseBody\module;

use AlibabaCloud\Dara\Model;

class appDesignSpec extends Model
{
    /**
     * @var bool
     */
    public $bilingual;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $businessScope;

    /**
     * @var string
     */
    public $colorStyle;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $deployArea;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $mainBusiness;

    /**
     * @var string
     */
    public $referenceWebsite;

    /**
     * @var string
     */
    public $siteGoals;

    /**
     * @var string
     */
    public $siteLanguage;

    /**
     * @var string
     */
    public $siteLogo;

    /**
     * @var string
     */
    public $siteSlogan;

    /**
     * @var string
     */
    public $siteStyle;

    /**
     * @var string
     */
    public $siteTitle;

    /**
     * @var string
     */
    public $siteType;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bilingual' => 'Bilingual',
        'bizId' => 'BizId',
        'businessScope' => 'BusinessScope',
        'colorStyle' => 'ColorStyle',
        'companyName' => 'CompanyName',
        'deployArea' => 'DeployArea',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'mainBusiness' => 'MainBusiness',
        'referenceWebsite' => 'ReferenceWebsite',
        'siteGoals' => 'SiteGoals',
        'siteLanguage' => 'SiteLanguage',
        'siteLogo' => 'SiteLogo',
        'siteSlogan' => 'SiteSlogan',
        'siteStyle' => 'SiteStyle',
        'siteTitle' => 'SiteTitle',
        'siteType' => 'SiteType',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bilingual) {
            $res['Bilingual'] = $this->bilingual;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->businessScope) {
            $res['BusinessScope'] = $this->businessScope;
        }

        if (null !== $this->colorStyle) {
            $res['ColorStyle'] = $this->colorStyle;
        }

        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->deployArea) {
            $res['DeployArea'] = $this->deployArea;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mainBusiness) {
            $res['MainBusiness'] = $this->mainBusiness;
        }

        if (null !== $this->referenceWebsite) {
            $res['ReferenceWebsite'] = $this->referenceWebsite;
        }

        if (null !== $this->siteGoals) {
            $res['SiteGoals'] = $this->siteGoals;
        }

        if (null !== $this->siteLanguage) {
            $res['SiteLanguage'] = $this->siteLanguage;
        }

        if (null !== $this->siteLogo) {
            $res['SiteLogo'] = $this->siteLogo;
        }

        if (null !== $this->siteSlogan) {
            $res['SiteSlogan'] = $this->siteSlogan;
        }

        if (null !== $this->siteStyle) {
            $res['SiteStyle'] = $this->siteStyle;
        }

        if (null !== $this->siteTitle) {
            $res['SiteTitle'] = $this->siteTitle;
        }

        if (null !== $this->siteType) {
            $res['SiteType'] = $this->siteType;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Bilingual'])) {
            $model->bilingual = $map['Bilingual'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['BusinessScope'])) {
            $model->businessScope = $map['BusinessScope'];
        }

        if (isset($map['ColorStyle'])) {
            $model->colorStyle = $map['ColorStyle'];
        }

        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['DeployArea'])) {
            $model->deployArea = $map['DeployArea'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MainBusiness'])) {
            $model->mainBusiness = $map['MainBusiness'];
        }

        if (isset($map['ReferenceWebsite'])) {
            $model->referenceWebsite = $map['ReferenceWebsite'];
        }

        if (isset($map['SiteGoals'])) {
            $model->siteGoals = $map['SiteGoals'];
        }

        if (isset($map['SiteLanguage'])) {
            $model->siteLanguage = $map['SiteLanguage'];
        }

        if (isset($map['SiteLogo'])) {
            $model->siteLogo = $map['SiteLogo'];
        }

        if (isset($map['SiteSlogan'])) {
            $model->siteSlogan = $map['SiteSlogan'];
        }

        if (isset($map['SiteStyle'])) {
            $model->siteStyle = $map['SiteStyle'];
        }

        if (isset($map['SiteTitle'])) {
            $model->siteTitle = $map['SiteTitle'];
        }

        if (isset($map['SiteType'])) {
            $model->siteType = $map['SiteType'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
