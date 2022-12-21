<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobResponseBody\uploadFileJobDetail\uploadOSSParam;
use AlibabaCloud\Tea\Model;

class uploadFileJobDetail extends Model
{
    /**
     * @description The key of the file that is returned after the file is uploaded. You can use this key when you upload the file as an attachment in a ticket.
     *
     * @example upload_3c7edea3-e4c3-4403-857d-737043036f69_test.sql
     *
     * @var string
     */
    public $attachmentKey;

    /**
     * @description The name of the file.
     *
     * @example test.sql
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The size of the file. Unit: byte.
     *
     * @example 2968269
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description The purpose of the uploaded file. Valid values:
     *
     *   **datacorrect**: The file is uploaded to change data.
     *   **order_info_attachment**: The file is uploaded as an attachment in a ticket.
     *   **big-file**: The file is uploaded to import multiple data records at a time.
     *   **sqlreview**: The file is uploaded for SQL review.
     *
     * @example datacorrect
     *
     * @var string
     */
    public $fileSource;

    /**
     * @description The key of the file upload task.
     *
     * @example 65254a4c1614235217749100e
     *
     * @var string
     */
    public $jobKey;

    /**
     * @description The status of the file upload task. Valid values:
     *
     *   **INIT**: The task was initialized.
     *   **PENDING**: The task waited to be run.
     *   **BE_SCHEDULED**: The task waited to be scheduled.
     *   **FAIL**: The task failed.
     *   **SUCCESS**: The task was run as expected.
     *   **RUNNING**: The task was being run.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The information about the status of the file upload task.
     *
     * @example success
     *
     * @var string
     */
    public $jobStatusDesc;

    /**
     * @description The information about the Object Storage Service (OSS) bucket from which the file is uploaded.
     *
     * >  This parameter is returned if the **UploadType** parameter is set to **OSS**.
     * @var uploadOSSParam
     */
    public $uploadOSSParam;

    /**
     * @description The method used to upload the file. Valid values:
     *
     *   **URL**
     *   **OSS**
     *
     * @example URL
     *
     * @var string
     */
    public $uploadType;

    /**
     * @description The URL of the file.
     *
     * >  This parameter is returned if the **UploadType** parameter is set to **URL**.
     * @example http://xxxx/test.sql
     *
     * @var string
     */
    public $uploadURL;

    /**
     * @description The size of the uploaded file. Unit: byte.
     *
     * @example 2968269
     *
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
