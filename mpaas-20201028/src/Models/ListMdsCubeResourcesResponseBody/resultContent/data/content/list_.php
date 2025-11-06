<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMdsCubeResourcesResponseBody\resultContent\data\content;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $androidMaxVersion;

    /**
     * @var string
     */
    public $androidMinVersion;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $binFileMd5;

    /**
     * @var string
     */
    public $binPrivateFileUrl;

    /**
     * @var string
     */
    public $binPublicFileUrl;

    /**
     * @var string
     */
    public $extendInfo;

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
    public $iosMaxVersion;

    /**
     * @var string
     */
    public $iosMinVersion;

    /**
     * @var string
     */
    public $jsonPrivateFileUrl;

    /**
     * @var string
     */
    public $jsonPublicFileUrl;

    /**
     * @var string
     */
    public $minCubeSdkVersion;

    /**
     * @var string
     */
    public $mockDataDownloadUrl;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $previewPictureUrl;

    /**
     * @var int
     */
    public $resourceStatus;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateResourceDesc;

    /**
     * @var string
     */
    public $templateResourceVersion;
    protected $_name = [
        'androidMaxVersion' => 'AndroidMaxVersion',
        'androidMinVersion' => 'AndroidMinVersion',
        'appCode' => 'AppCode',
        'binFileMd5' => 'BinFileMd5',
        'binPrivateFileUrl' => 'BinPrivateFileUrl',
        'binPublicFileUrl' => 'BinPublicFileUrl',
        'extendInfo' => 'ExtendInfo',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'iosMaxVersion' => 'IosMaxVersion',
        'iosMinVersion' => 'IosMinVersion',
        'jsonPrivateFileUrl' => 'JsonPrivateFileUrl',
        'jsonPublicFileUrl' => 'JsonPublicFileUrl',
        'minCubeSdkVersion' => 'MinCubeSdkVersion',
        'mockDataDownloadUrl' => 'MockDataDownloadUrl',
        'operator' => 'Operator',
        'platform' => 'Platform',
        'previewPictureUrl' => 'PreviewPictureUrl',
        'resourceStatus' => 'ResourceStatus',
        'status' => 'Status',
        'templateId' => 'TemplateId',
        'templateResourceDesc' => 'TemplateResourceDesc',
        'templateResourceVersion' => 'TemplateResourceVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidMaxVersion) {
            $res['AndroidMaxVersion'] = $this->androidMaxVersion;
        }

        if (null !== $this->androidMinVersion) {
            $res['AndroidMinVersion'] = $this->androidMinVersion;
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->binFileMd5) {
            $res['BinFileMd5'] = $this->binFileMd5;
        }

        if (null !== $this->binPrivateFileUrl) {
            $res['BinPrivateFileUrl'] = $this->binPrivateFileUrl;
        }

        if (null !== $this->binPublicFileUrl) {
            $res['BinPublicFileUrl'] = $this->binPublicFileUrl;
        }

        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
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

        if (null !== $this->iosMaxVersion) {
            $res['IosMaxVersion'] = $this->iosMaxVersion;
        }

        if (null !== $this->iosMinVersion) {
            $res['IosMinVersion'] = $this->iosMinVersion;
        }

        if (null !== $this->jsonPrivateFileUrl) {
            $res['JsonPrivateFileUrl'] = $this->jsonPrivateFileUrl;
        }

        if (null !== $this->jsonPublicFileUrl) {
            $res['JsonPublicFileUrl'] = $this->jsonPublicFileUrl;
        }

        if (null !== $this->minCubeSdkVersion) {
            $res['MinCubeSdkVersion'] = $this->minCubeSdkVersion;
        }

        if (null !== $this->mockDataDownloadUrl) {
            $res['MockDataDownloadUrl'] = $this->mockDataDownloadUrl;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->previewPictureUrl) {
            $res['PreviewPictureUrl'] = $this->previewPictureUrl;
        }

        if (null !== $this->resourceStatus) {
            $res['ResourceStatus'] = $this->resourceStatus;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateResourceDesc) {
            $res['TemplateResourceDesc'] = $this->templateResourceDesc;
        }

        if (null !== $this->templateResourceVersion) {
            $res['TemplateResourceVersion'] = $this->templateResourceVersion;
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
        if (isset($map['AndroidMaxVersion'])) {
            $model->androidMaxVersion = $map['AndroidMaxVersion'];
        }

        if (isset($map['AndroidMinVersion'])) {
            $model->androidMinVersion = $map['AndroidMinVersion'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['BinFileMd5'])) {
            $model->binFileMd5 = $map['BinFileMd5'];
        }

        if (isset($map['BinPrivateFileUrl'])) {
            $model->binPrivateFileUrl = $map['BinPrivateFileUrl'];
        }

        if (isset($map['BinPublicFileUrl'])) {
            $model->binPublicFileUrl = $map['BinPublicFileUrl'];
        }

        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
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

        if (isset($map['IosMaxVersion'])) {
            $model->iosMaxVersion = $map['IosMaxVersion'];
        }

        if (isset($map['IosMinVersion'])) {
            $model->iosMinVersion = $map['IosMinVersion'];
        }

        if (isset($map['JsonPrivateFileUrl'])) {
            $model->jsonPrivateFileUrl = $map['JsonPrivateFileUrl'];
        }

        if (isset($map['JsonPublicFileUrl'])) {
            $model->jsonPublicFileUrl = $map['JsonPublicFileUrl'];
        }

        if (isset($map['MinCubeSdkVersion'])) {
            $model->minCubeSdkVersion = $map['MinCubeSdkVersion'];
        }

        if (isset($map['MockDataDownloadUrl'])) {
            $model->mockDataDownloadUrl = $map['MockDataDownloadUrl'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['PreviewPictureUrl'])) {
            $model->previewPictureUrl = $map['PreviewPictureUrl'];
        }

        if (isset($map['ResourceStatus'])) {
            $model->resourceStatus = $map['ResourceStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateResourceDesc'])) {
            $model->templateResourceDesc = $map['TemplateResourceDesc'];
        }

        if (isset($map['TemplateResourceVersion'])) {
            $model->templateResourceVersion = $map['TemplateResourceVersion'];
        }

        return $model;
    }
}
