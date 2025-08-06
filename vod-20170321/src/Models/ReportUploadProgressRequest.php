<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class ReportUploadProgressRequest extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $authInfo;

    /**
     * @var int
     */
    public $authTimestamp;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var int
     */
    public $donePartsCount;

    /**
     * @var string
     */
    public $fileCreateTime;

    /**
     * @var string
     */
    public $fileHash;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $partSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $terminalType;

    /**
     * @var int
     */
    public $totalPart;

    /**
     * @var string
     */
    public $uploadAddress;

    /**
     * @var string
     */
    public $uploadId;

    /**
     * @var string
     */
    public $uploadPoint;

    /**
     * @var float
     */
    public $uploadRatio;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'appVersion' => 'AppVersion',
        'authInfo' => 'AuthInfo',
        'authTimestamp' => 'AuthTimestamp',
        'businessType' => 'BusinessType',
        'clientId' => 'ClientId',
        'deviceModel' => 'DeviceModel',
        'donePartsCount' => 'DonePartsCount',
        'fileCreateTime' => 'FileCreateTime',
        'fileHash' => 'FileHash',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'ownerId' => 'OwnerId',
        'partSize' => 'PartSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'source' => 'Source',
        'terminalType' => 'TerminalType',
        'totalPart' => 'TotalPart',
        'uploadAddress' => 'UploadAddress',
        'uploadId' => 'UploadId',
        'uploadPoint' => 'UploadPoint',
        'uploadRatio' => 'UploadRatio',
        'userId' => 'UserId',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->authInfo) {
            $res['AuthInfo'] = $this->authInfo;
        }

        if (null !== $this->authTimestamp) {
            $res['AuthTimestamp'] = $this->authTimestamp;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }

        if (null !== $this->donePartsCount) {
            $res['DonePartsCount'] = $this->donePartsCount;
        }

        if (null !== $this->fileCreateTime) {
            $res['FileCreateTime'] = $this->fileCreateTime;
        }

        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->partSize) {
            $res['PartSize'] = $this->partSize;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
        }

        if (null !== $this->totalPart) {
            $res['TotalPart'] = $this->totalPart;
        }

        if (null !== $this->uploadAddress) {
            $res['UploadAddress'] = $this->uploadAddress;
        }

        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
        }

        if (null !== $this->uploadPoint) {
            $res['UploadPoint'] = $this->uploadPoint;
        }

        if (null !== $this->uploadRatio) {
            $res['UploadRatio'] = $this->uploadRatio;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['AuthInfo'])) {
            $model->authInfo = $map['AuthInfo'];
        }

        if (isset($map['AuthTimestamp'])) {
            $model->authTimestamp = $map['AuthTimestamp'];
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }

        if (isset($map['DonePartsCount'])) {
            $model->donePartsCount = $map['DonePartsCount'];
        }

        if (isset($map['FileCreateTime'])) {
            $model->fileCreateTime = $map['FileCreateTime'];
        }

        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PartSize'])) {
            $model->partSize = $map['PartSize'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }

        if (isset($map['TotalPart'])) {
            $model->totalPart = $map['TotalPart'];
        }

        if (isset($map['UploadAddress'])) {
            $model->uploadAddress = $map['UploadAddress'];
        }

        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }

        if (isset($map['UploadPoint'])) {
            $model->uploadPoint = $map['UploadPoint'];
        }

        if (isset($map['UploadRatio'])) {
            $model->uploadRatio = $map['UploadRatio'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
