<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class GetAppVersionResponseBody extends Model
{
    /**
     * @example 4384****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1432****
     *
     * @var string
     */
    public $appVersionId;

    /**
     * @example exampleVersion
     *
     * @var string
     */
    public $appVersionName;

    /**
     * @example file_uploading
     *
     * @var string
     */
    public $appVersionStatus;

    /**
     * @var string
     */
    public $appVersionStatusMemo;

    /**
     * @example 0.31
     *
     * @var float
     */
    public $consumeCu;

    /**
     * @example https://www.example.com/exampleFile.tar
     *
     * @var string
     */
    public $fileAddress;

    /**
     * @example 1024
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example 2022-04-06 02:00:00
     *
     * @var string
     */
    public $fileUploadFinishTime;

    /**
     * @example local_file_upload
     *
     * @var string
     */
    public $fileUploadType;

    /**
     * @example 2022-04-06 02:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-04-06 02:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 46329898-489C-4E63-9BA1-C1DA5C5D0986
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId'                => 'AppId',
        'appVersionId'         => 'AppVersionId',
        'appVersionName'       => 'AppVersionName',
        'appVersionStatus'     => 'AppVersionStatus',
        'appVersionStatusMemo' => 'AppVersionStatusMemo',
        'consumeCu'            => 'ConsumeCu',
        'fileAddress'          => 'FileAddress',
        'fileSize'             => 'FileSize',
        'fileUploadFinishTime' => 'FileUploadFinishTime',
        'fileUploadType'       => 'FileUploadType',
        'gmtCreate'            => 'GmtCreate',
        'gmtModified'          => 'GmtModified',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }
        if (null !== $this->appVersionStatus) {
            $res['AppVersionStatus'] = $this->appVersionStatus;
        }
        if (null !== $this->appVersionStatusMemo) {
            $res['AppVersionStatusMemo'] = $this->appVersionStatusMemo;
        }
        if (null !== $this->consumeCu) {
            $res['ConsumeCu'] = $this->consumeCu;
        }
        if (null !== $this->fileAddress) {
            $res['FileAddress'] = $this->fileAddress;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileUploadFinishTime) {
            $res['FileUploadFinishTime'] = $this->fileUploadFinishTime;
        }
        if (null !== $this->fileUploadType) {
            $res['FileUploadType'] = $this->fileUploadType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }
        if (isset($map['AppVersionStatus'])) {
            $model->appVersionStatus = $map['AppVersionStatus'];
        }
        if (isset($map['AppVersionStatusMemo'])) {
            $model->appVersionStatusMemo = $map['AppVersionStatusMemo'];
        }
        if (isset($map['ConsumeCu'])) {
            $model->consumeCu = $map['ConsumeCu'];
        }
        if (isset($map['FileAddress'])) {
            $model->fileAddress = $map['FileAddress'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileUploadFinishTime'])) {
            $model->fileUploadFinishTime = $map['FileUploadFinishTime'];
        }
        if (isset($map['FileUploadType'])) {
            $model->fileUploadType = $map['FileUploadType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
