<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CreateFileResponseBody extends Model
{
    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var bool
     */
    public $exist;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $parentFileId;

    /**
     * @var UploadPartInfo[]
     */
    public $partInfoList;

    /**
     * @var bool
     */
    public $rapidUpload;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'domainId' => 'domain_id',
        'driveId' => 'drive_id',
        'exist' => 'exist',
        'fileId' => 'file_id',
        'fileName' => 'file_name',
        'parentFileId' => 'parent_file_id',
        'partInfoList' => 'part_info_list',
        'rapidUpload' => 'rapid_upload',
        'status' => 'status',
        'type' => 'type',
        'uploadId' => 'upload_id',
    ];

    public function validate()
    {
        if (\is_array($this->partInfoList)) {
            Model::validateArray($this->partInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->partInfoList)) {
                $res['part_info_list'] = [];
                $n1 = 0;
                foreach ($this->partInfoList as $item1) {
                    $res['part_info_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['part_info_list'] as $item1) {
                    $model->partInfoList[$n1++] = UploadPartInfo::fromMap($item1);
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
