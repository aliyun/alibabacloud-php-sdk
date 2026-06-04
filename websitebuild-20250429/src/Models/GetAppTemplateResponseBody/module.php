<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $colorScheme;

    /**
     * @var string
     */
    public $colorSchemeName;

    /**
     * @var int
     */
    public $copyCount;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $industryName;

    /**
     * @var string
     */
    public $lastModifier;

    /**
     * @var int
     */
    public $likeCount;

    /**
     * @var bool
     */
    public $liked;

    /**
     * @var string
     */
    public $metadata;

    /**
     * @var string
     */
    public $previewUrl;

    /**
     * @var string
     */
    public $productVersion;

    /**
     * @var string
     */
    public $productVersionName;

    /**
     * @var int
     */
    public $shareCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $thumbnailUrl;

    /**
     * @var int
     */
    public $viewCount;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'appType' => 'AppType',
        'bizId' => 'BizId',
        'colorScheme' => 'ColorScheme',
        'colorSchemeName' => 'ColorSchemeName',
        'copyCount' => 'CopyCount',
        'creator' => 'Creator',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'id' => 'Id',
        'industry' => 'Industry',
        'industryName' => 'IndustryName',
        'lastModifier' => 'LastModifier',
        'likeCount' => 'LikeCount',
        'liked' => 'Liked',
        'metadata' => 'Metadata',
        'previewUrl' => 'PreviewUrl',
        'productVersion' => 'ProductVersion',
        'productVersionName' => 'ProductVersionName',
        'shareCount' => 'ShareCount',
        'status' => 'Status',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'thumbnailUrl' => 'ThumbnailUrl',
        'viewCount' => 'ViewCount',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->colorScheme) {
            $res['ColorScheme'] = $this->colorScheme;
        }

        if (null !== $this->colorSchemeName) {
            $res['ColorSchemeName'] = $this->colorSchemeName;
        }

        if (null !== $this->copyCount) {
            $res['CopyCount'] = $this->copyCount;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }

        if (null !== $this->industryName) {
            $res['IndustryName'] = $this->industryName;
        }

        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }

        if (null !== $this->likeCount) {
            $res['LikeCount'] = $this->likeCount;
        }

        if (null !== $this->liked) {
            $res['Liked'] = $this->liked;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->previewUrl) {
            $res['PreviewUrl'] = $this->previewUrl;
        }

        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }

        if (null !== $this->productVersionName) {
            $res['ProductVersionName'] = $this->productVersionName;
        }

        if (null !== $this->shareCount) {
            $res['ShareCount'] = $this->shareCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->thumbnailUrl) {
            $res['ThumbnailUrl'] = $this->thumbnailUrl;
        }

        if (null !== $this->viewCount) {
            $res['ViewCount'] = $this->viewCount;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['ColorScheme'])) {
            $model->colorScheme = $map['ColorScheme'];
        }

        if (isset($map['ColorSchemeName'])) {
            $model->colorSchemeName = $map['ColorSchemeName'];
        }

        if (isset($map['CopyCount'])) {
            $model->copyCount = $map['CopyCount'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }

        if (isset($map['IndustryName'])) {
            $model->industryName = $map['IndustryName'];
        }

        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }

        if (isset($map['LikeCount'])) {
            $model->likeCount = $map['LikeCount'];
        }

        if (isset($map['Liked'])) {
            $model->liked = $map['Liked'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['PreviewUrl'])) {
            $model->previewUrl = $map['PreviewUrl'];
        }

        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }

        if (isset($map['ProductVersionName'])) {
            $model->productVersionName = $map['ProductVersionName'];
        }

        if (isset($map['ShareCount'])) {
            $model->shareCount = $map['ShareCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['ThumbnailUrl'])) {
            $model->thumbnailUrl = $map['ThumbnailUrl'];
        }

        if (isset($map['ViewCount'])) {
            $model->viewCount = $map['ViewCount'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
