<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListFileUploadResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aliyunParentUid;

    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $downloadLink;

    /**
     * @var string
     */
    public $fileCategory;

    /**
     * @var string
     */
    public $fileFrom;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $intranetDownloadLink;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $uploadLocation;
    protected $_name = [
        'aliyunParentUid' => 'AliyunParentUid',
        'aliyunUid' => 'AliyunUid',
        'downloadLink' => 'DownloadLink',
        'fileCategory' => 'FileCategory',
        'fileFrom' => 'FileFrom',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'fileType' => 'FileType',
        'gmtCreated' => 'GmtCreated',
        'intranetDownloadLink' => 'IntranetDownloadLink',
        'region' => 'Region',
        'sessionId' => 'SessionId',
        'uploadLocation' => 'UploadLocation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunParentUid) {
            $res['AliyunParentUid'] = $this->aliyunParentUid;
        }

        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }

        if (null !== $this->fileCategory) {
            $res['FileCategory'] = $this->fileCategory;
        }

        if (null !== $this->fileFrom) {
            $res['FileFrom'] = $this->fileFrom;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->intranetDownloadLink) {
            $res['IntranetDownloadLink'] = $this->intranetDownloadLink;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->uploadLocation) {
            $res['UploadLocation'] = $this->uploadLocation;
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
        if (isset($map['AliyunParentUid'])) {
            $model->aliyunParentUid = $map['AliyunParentUid'];
        }

        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }

        if (isset($map['FileCategory'])) {
            $model->fileCategory = $map['FileCategory'];
        }

        if (isset($map['FileFrom'])) {
            $model->fileFrom = $map['FileFrom'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['IntranetDownloadLink'])) {
            $model->intranetDownloadLink = $map['IntranetDownloadLink'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['UploadLocation'])) {
            $model->uploadLocation = $map['UploadLocation'];
        }

        return $model;
    }
}
