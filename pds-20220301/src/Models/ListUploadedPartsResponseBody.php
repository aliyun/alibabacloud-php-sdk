<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListUploadedPartsResponseBody extends Model
{
    /**
     * @description The file ID.
     *
     * @example 322fb07b975f4b0ae1b543fe8475eee4c19eb2b2
     *
     * @var string
     */
    public $fileId;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If next_marker is empty, no next page exists.
     *
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $nextPartNumberMarker;

    /**
     * @description Indicates whether the parallel upload feature is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $parallelUpload;

    /**
     * @description The ID of the upload task.
     *
     * @example 00166D06127B413BA1EC8ABB1144D101
     *
     * @var string
     */
    public $uploadId;

    /**
     * @description The information about the file parts.
     *
     * @var UploadPartInfo[]
     */
    public $uploadedParts;
    protected $_name = [
        'fileId'               => 'file_id',
        'nextPartNumberMarker' => 'next_part_number_marker',
        'parallelUpload'       => 'parallel_upload',
        'uploadId'             => 'upload_id',
        'uploadedParts'        => 'uploaded_parts',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['uploaded_parts'] = [];
            if (null !== $this->uploadedParts && \is_array($this->uploadedParts)) {
                $n = 0;
                foreach ($this->uploadedParts as $item) {
                    $res['uploaded_parts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUploadedPartsResponseBody
     */
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
                $n                    = 0;
                foreach ($map['uploaded_parts'] as $item) {
                    $model->uploadedParts[$n++] = null !== $item ? UploadPartInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
