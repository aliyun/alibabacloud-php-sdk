<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CreateFileResponseBody extends Model
{
    /**
     * @description The domain ID.
     *
     * @example bj1
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The drive ID.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description Indicates whether the file exists.
     *
     * @example false
     *
     * @var bool
     */
    public $exist;

    /**
     * @description The file ID.
     *
     * @example fileid1
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The file name.
     *
     * @example a.txt
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The ID of the parent directory.
     *
     * @example fileid5
     *
     * @var string
     */
    public $parentFileId;

    /**
     * @description The information about the file parts.
     *
     * @var UploadPartInfo[]
     */
    public $partInfoList;

    /**
     * @description Indicates whether the file is instantly uploaded.
     *
     * @example true
     *
     * @var bool
     */
    public $rapidUpload;

    /**
     * @description The state of the file.
     *
     * @example uploading
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the file.
     *
     * @example file
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the upload task.
     *
     * @example uploadid1
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'domainId'     => 'domain_id',
        'driveId'      => 'drive_id',
        'exist'        => 'exist',
        'fileId'       => 'file_id',
        'fileName'     => 'file_name',
        'parentFileId' => 'parent_file_id',
        'partInfoList' => 'part_info_list',
        'rapidUpload'  => 'rapid_upload',
        'status'       => 'status',
        'type'         => 'type',
        'uploadId'     => 'upload_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->exist) {
            $res['exist'] = $this->exist;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }
        if (null !== $this->parentFileId) {
            $res['parent_file_id'] = $this->parentFileId;
        }
        if (null !== $this->partInfoList) {
            $res['part_info_list'] = [];
            if (null !== $this->partInfoList && \is_array($this->partInfoList)) {
                $n = 0;
                foreach ($this->partInfoList as $item) {
                    $res['part_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rapidUpload) {
            $res['rapid_upload'] = $this->rapidUpload;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->uploadId) {
            $res['upload_id'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['exist'])) {
            $model->exist = $map['exist'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['file_name'])) {
            $model->fileName = $map['file_name'];
        }
        if (isset($map['parent_file_id'])) {
            $model->parentFileId = $map['parent_file_id'];
        }
        if (isset($map['part_info_list'])) {
            if (!empty($map['part_info_list'])) {
                $model->partInfoList = [];
                $n                   = 0;
                foreach ($map['part_info_list'] as $item) {
                    $model->partInfoList[$n++] = null !== $item ? UploadPartInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['rapid_upload'])) {
            $model->rapidUpload = $map['rapid_upload'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['upload_id'])) {
            $model->uploadId = $map['upload_id'];
        }

        return $model;
    }
}
