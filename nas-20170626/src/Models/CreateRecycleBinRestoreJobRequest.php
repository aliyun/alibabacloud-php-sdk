<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateRecycleBinRestoreJobRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * > If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the file or directory that you want to restore.
     *
     * You can call the [ListRecycleBinJobs](https://help.aliyun.com/document_detail/264192.html) operation to query the value of the FileId parameter.
     *
     * This parameter is required.
     *
     * @example 04***08
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     *
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The ID of the directory to which the file is restored.
     *
     * This parameter is required.
     *
     * @example 13***15
     *
     * @var string
     */
    public $targetFileId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'fileId' => 'FileId',
        'fileSystemId' => 'FileSystemId',
        'targetFileId' => 'TargetFileId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->targetFileId) {
            $res['TargetFileId'] = $this->targetFileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRecycleBinRestoreJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['TargetFileId'])) {
            $model->targetFileId = $map['TargetFileId'];
        }

        return $model;
    }
}
