<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobResponseBody\uploadFileJobDetail\uploadOSSParam;
use AlibabaCloud\Tea\Model;

class uploadFileJobDetail extends Model
{
    /**
     * @var string
     */
    public $jobKey;

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
    public $fileSource;

    /**
     * @var string
     */
    public $uploadType;

    /**
     * @var string
     */
    public $uploadURL;

    /**
     * @var uploadOSSParam
     */
    public $uploadOSSParam;

    /**
     * @var int
     */
    public $uploadedSize;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $jobStatusDesc;

    /**
     * @var string
     */
    public $attachmentKey;
    protected $_name = [
        'jobKey'         => 'JobKey',
        'fileName'       => 'FileName',
        'fileSize'       => 'FileSize',
        'fileSource'     => 'FileSource',
        'uploadType'     => 'UploadType',
        'uploadURL'      => 'UploadURL',
        'uploadOSSParam' => 'UploadOSSParam',
        'uploadedSize'   => 'UploadedSize',
        'jobStatus'      => 'JobStatus',
        'jobStatusDesc'  => 'JobStatusDesc',
        'attachmentKey'  => 'AttachmentKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobKey) {
            $res['JobKey'] = $this->jobKey;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileSource) {
            $res['FileSource'] = $this->fileSource;
        }
        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
        }
        if (null !== $this->uploadURL) {
            $res['UploadURL'] = $this->uploadURL;
        }
        if (null !== $this->uploadOSSParam) {
            $res['UploadOSSParam'] = null !== $this->uploadOSSParam ? $this->uploadOSSParam->toMap() : null;
        }
        if (null !== $this->uploadedSize) {
            $res['UploadedSize'] = $this->uploadedSize;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->jobStatusDesc) {
            $res['JobStatusDesc'] = $this->jobStatusDesc;
        }
        if (null !== $this->attachmentKey) {
            $res['AttachmentKey'] = $this->attachmentKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadFileJobDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobKey'])) {
            $model->jobKey = $map['JobKey'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileSource'])) {
            $model->fileSource = $map['FileSource'];
        }
        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }
        if (isset($map['UploadURL'])) {
            $model->uploadURL = $map['UploadURL'];
        }
        if (isset($map['UploadOSSParam'])) {
            $model->uploadOSSParam = uploadOSSParam::fromMap($map['UploadOSSParam']);
        }
        if (isset($map['UploadedSize'])) {
            $model->uploadedSize = $map['UploadedSize'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['JobStatusDesc'])) {
            $model->jobStatusDesc = $map['JobStatusDesc'];
        }
        if (isset($map['AttachmentKey'])) {
            $model->attachmentKey = $map['AttachmentKey'];
        }

        return $model;
    }
}
