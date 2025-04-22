<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ListUploadedPartsResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $nextPartNumberMarker;

    /**
     * @var bool
     */
    public $parallelUpload;

    /**
     * @var string
     */
    public $uploadId;

    /**
     * @var UploadPartInfo[]
     */
    public $uploadedParts;
    protected $_name = [
        'fileId' => 'file_id',
        'nextPartNumberMarker' => 'next_part_number_marker',
        'parallelUpload' => 'parallel_upload',
        'uploadId' => 'upload_id',
        'uploadedParts' => 'uploaded_parts',
    ];

    public function validate()
    {
        if (\is_array($this->uploadedParts)) {
            Model::validateArray($this->uploadedParts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        if (null !== $this->nextPartNumberMarker) {
            $res['next_part_number_marker'] = $this->nextPartNumberMarker;
        }

        if (null !== $this->parallelUpload) {
            $res['parallel_upload'] = $this->parallelUpload;
        }

        if (null !== $this->uploadId) {
            $res['upload_id'] = $this->uploadId;
        }

        if (null !== $this->uploadedParts) {
            if (\is_array($this->uploadedParts)) {
                $res['uploaded_parts'] = [];
                $n1 = 0;
                foreach ($this->uploadedParts as $item1) {
                    $res['uploaded_parts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        if (isset($map['next_part_number_marker'])) {
            $model->nextPartNumberMarker = $map['next_part_number_marker'];
        }

        if (isset($map['parallel_upload'])) {
            $model->parallelUpload = $map['parallel_upload'];
        }

        if (isset($map['upload_id'])) {
            $model->uploadId = $map['upload_id'];
        }

        if (isset($map['uploaded_parts'])) {
            if (!empty($map['uploaded_parts'])) {
                $model->uploadedParts = [];
                $n1 = 0;
                foreach ($map['uploaded_parts'] as $item1) {
                    $model->uploadedParts[$n1++] = UploadPartInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
