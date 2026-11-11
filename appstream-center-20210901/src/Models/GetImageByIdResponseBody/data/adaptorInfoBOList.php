<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetImageByIdResponseBody\data;

use AlibabaCloud\Dara\Model;

class adaptorInfoBOList extends Model
{
    /**
     * @var string
     */
    public $adaptorId;

    /**
     * @var string
     */
    public $adaptorMessage;

    /**
     * @var string
     */
    public $adaptorMode;

    /**
     * @var string
     */
    public $adaptorStep;

    /**
     * @var int
     */
    public $aid;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $appIconUrl;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appScript;

    /**
     * @var string
     */
    public $appThemeColor;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var string
     */
    public $appVersionName;

    /**
     * @var string
     */
    public $appVersionNumber;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $categoryType;

    /**
     * @var string
     */
    public $controlParam;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $executeFileAddress;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $fileSize;

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
    public $optimizeParam;

    /**
     * @var string
     */
    public $originAppType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $runtimeEnv;

    /**
     * @var string
     */
    public $silenceFlag;

    /**
     * @var string
     */
    public $silenceParam;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subAppType;
    protected $_name = [
        'adaptorId' => 'AdaptorId',
        'adaptorMessage' => 'AdaptorMessage',
        'adaptorMode' => 'AdaptorMode',
        'adaptorStep' => 'AdaptorStep',
        'aid' => 'Aid',
        'aliUid' => 'AliUid',
        'appIconUrl' => 'AppIconUrl',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appScript' => 'AppScript',
        'appThemeColor' => 'AppThemeColor',
        'appType' => 'AppType',
        'appVersionId' => 'AppVersionId',
        'appVersionName' => 'AppVersionName',
        'appVersionNumber' => 'AppVersionNumber',
        'bizType' => 'BizType',
        'bucketName' => 'BucketName',
        'categoryId' => 'CategoryId',
        'categoryType' => 'CategoryType',
        'controlParam' => 'ControlParam',
        'diskId' => 'DiskId',
        'executeFileAddress' => 'ExecuteFileAddress',
        'extend' => 'Extend',
        'fileName' => 'FileName',
        'filePath' => 'FilePath',
        'fileSize' => 'FileSize',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'optimizeParam' => 'OptimizeParam',
        'originAppType' => 'OriginAppType',
        'osType' => 'OsType',
        'productType' => 'ProductType',
        'runtimeEnv' => 'RuntimeEnv',
        'silenceFlag' => 'SilenceFlag',
        'silenceParam' => 'SilenceParam',
        'status' => 'Status',
        'subAppType' => 'SubAppType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptorId) {
            $res['AdaptorId'] = $this->adaptorId;
        }

        if (null !== $this->adaptorMessage) {
            $res['AdaptorMessage'] = $this->adaptorMessage;
        }

        if (null !== $this->adaptorMode) {
            $res['AdaptorMode'] = $this->adaptorMode;
        }

        if (null !== $this->adaptorStep) {
            $res['AdaptorStep'] = $this->adaptorStep;
        }

        if (null !== $this->aid) {
            $res['Aid'] = $this->aid;
        }

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->appIconUrl) {
            $res['AppIconUrl'] = $this->appIconUrl;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appScript) {
            $res['AppScript'] = $this->appScript;
        }

        if (null !== $this->appThemeColor) {
            $res['AppThemeColor'] = $this->appThemeColor;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }

        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }

        if (null !== $this->appVersionNumber) {
            $res['AppVersionNumber'] = $this->appVersionNumber;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }

        if (null !== $this->controlParam) {
            $res['ControlParam'] = $this->controlParam;
        }

        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->executeFileAddress) {
            $res['ExecuteFileAddress'] = $this->executeFileAddress;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->optimizeParam) {
            $res['OptimizeParam'] = $this->optimizeParam;
        }

        if (null !== $this->originAppType) {
            $res['OriginAppType'] = $this->originAppType;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->runtimeEnv) {
            $res['RuntimeEnv'] = $this->runtimeEnv;
        }

        if (null !== $this->silenceFlag) {
            $res['SilenceFlag'] = $this->silenceFlag;
        }

        if (null !== $this->silenceParam) {
            $res['SilenceParam'] = $this->silenceParam;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subAppType) {
            $res['SubAppType'] = $this->subAppType;
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
        if (isset($map['AdaptorId'])) {
            $model->adaptorId = $map['AdaptorId'];
        }

        if (isset($map['AdaptorMessage'])) {
            $model->adaptorMessage = $map['AdaptorMessage'];
        }

        if (isset($map['AdaptorMode'])) {
            $model->adaptorMode = $map['AdaptorMode'];
        }

        if (isset($map['AdaptorStep'])) {
            $model->adaptorStep = $map['AdaptorStep'];
        }

        if (isset($map['Aid'])) {
            $model->aid = $map['Aid'];
        }

        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['AppIconUrl'])) {
            $model->appIconUrl = $map['AppIconUrl'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppScript'])) {
            $model->appScript = $map['AppScript'];
        }

        if (isset($map['AppThemeColor'])) {
            $model->appThemeColor = $map['AppThemeColor'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }

        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }

        if (isset($map['AppVersionNumber'])) {
            $model->appVersionNumber = $map['AppVersionNumber'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }

        if (isset($map['ControlParam'])) {
            $model->controlParam = $map['ControlParam'];
        }

        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['ExecuteFileAddress'])) {
            $model->executeFileAddress = $map['ExecuteFileAddress'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['OptimizeParam'])) {
            $model->optimizeParam = $map['OptimizeParam'];
        }

        if (isset($map['OriginAppType'])) {
            $model->originAppType = $map['OriginAppType'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['RuntimeEnv'])) {
            $model->runtimeEnv = $map['RuntimeEnv'];
        }

        if (isset($map['SilenceFlag'])) {
            $model->silenceFlag = $map['SilenceFlag'];
        }

        if (isset($map['SilenceParam'])) {
            $model->silenceParam = $map['SilenceParam'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubAppType'])) {
            $model->subAppType = $map['SubAppType'];
        }

        return $model;
    }
}
