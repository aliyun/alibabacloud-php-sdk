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
    public $attachmentKey;

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
    public $jobKey;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $jobStatusDesc;

    /**
     * @var uploadOSSParam
     */
    public $uploadOSSParam;

    /**
     * @var string
     */
    public $uploadType;

    /**
     * @var string
     */
    public $uploadURL;

    /**
     * @var int
     */
    public $uploadedSize;
    protected $_name = [
        'attachmentKey'  => 'AttachmentKey',
        'fileName'       => 'FileName',
        'fileSize'       => 'FileSize',
        'fileSource'     => 'FileSource',
        'jobKey'         => 'JobKey',
        'jobStatus'      => 'JobStatus',
        'jobStatusDesc'  => 'JobStatusDesc',
        'uploadOSSParam' => 'UploadOSSParam',
        'uploadType'     => 'UploadType',
        'uploadURL'      => 'UploadURL',
        'uploadedSize'   => 'UploadedSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentKey) {
            $res['AttachmentKey'] = $this->attachmentKey;
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
        if (null !== $this->jobKey) {
            $res['JobKey'] = $this->jobKey;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->jobStatusDesc) {
            $res['JobStatusDesc'] = $this->jobStatusDesc;
        }
        if (null !== $this->uploadOSSParam) {
            $res['UploadOSSParam'] = null !== $this->uploadOSSParam ? $this->uploadOSSParam->toMap() : null;
        }
        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
        }
        if (null !== $this->uploadURL) {
            $res['UploadURL'] = $this->uploadURL;
        }
        if (null !== $this->uploadedSize) {
            $res['UploadedSize'] = $this->uploadedSize;
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
        if (isset($map['AttachmentKey'])) {
            $model->attachmentKey = $map['AttachmentKey'];
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
        if (isset($map['JobKey'])) {
            $model->jobKey = $map['JobKey'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['JobStatusDesc'])) {
            $model->jobStatusDesc = $map['JobStatusDesc'];
        }
        if (isset($map['UploadOSSParam'])) {
            $model->uploadOSSParam = uploadOSSParam::fromMap($map['UploadOSSParam']);
        }
        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }
        if (isset($map['UploadURL'])) {
            $model->uploadURL = $map['UploadURL'];
        }
        if (isset($map['UploadedSize'])) {
            $model->uploadedSize = $map['UploadedSize'];
        }

        return $model;
    }
}
