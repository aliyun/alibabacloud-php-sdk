<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListMultipartUploadsResponseBody extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $encodingType;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $keyMarker;

    /**
     * @var int
     */
    public $maxUploads;

    /**
     * @var string
     */
    public $nextKeyMarker;

    /**
     * @var string
     */
    public $nextUploadMarker;

    /**
     * @var Upload[]
     */
    public $uploads;

    /**
     * @var string
     */
    public $uploadIdMarker;
    protected $_name = [
        'bucket'           => 'Bucket',
        'encodingType'     => 'EncodingType',
        'isTruncated'      => 'IsTruncated',
        'keyMarker'        => 'KeyMarker',
        'maxUploads'       => 'MaxUploads',
        'nextKeyMarker'    => 'NextKeyMarker',
        'nextUploadMarker' => 'NextUploadMarker',
        'uploads'          => 'Upload',
        'uploadIdMarker'   => 'UploadIdMarker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->encodingType) {
            $res['EncodingType'] = $this->encodingType;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->keyMarker) {
            $res['KeyMarker'] = $this->keyMarker;
        }
        if (null !== $this->maxUploads) {
            $res['MaxUploads'] = $this->maxUploads;
        }
        if (null !== $this->nextKeyMarker) {
            $res['NextKeyMarker'] = $this->nextKeyMarker;
        }
        if (null !== $this->nextUploadMarker) {
            $res['NextUploadMarker'] = $this->nextUploadMarker;
        }
        if (null !== $this->uploads) {
            $res['Upload'] = [];
            if (null !== $this->uploads && \is_array($this->uploads)) {
                $n = 0;
                foreach ($this->uploads as $item) {
                    $res['Upload'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uploadIdMarker) {
            $res['UploadIdMarker'] = $this->uploadIdMarker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMultipartUploadsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['EncodingType'])) {
            $model->encodingType = $map['EncodingType'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['KeyMarker'])) {
            $model->keyMarker = $map['KeyMarker'];
        }
        if (isset($map['MaxUploads'])) {
            $model->maxUploads = $map['MaxUploads'];
        }
        if (isset($map['NextKeyMarker'])) {
            $model->nextKeyMarker = $map['NextKeyMarker'];
        }
        if (isset($map['NextUploadMarker'])) {
            $model->nextUploadMarker = $map['NextUploadMarker'];
        }
        if (isset($map['Upload'])) {
            if (!empty($map['Upload'])) {
                $model->uploads = [];
                $n              = 0;
                foreach ($map['Upload'] as $item) {
                    $model->uploads[$n++] = null !== $item ? Upload::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UploadIdMarker'])) {
            $model->uploadIdMarker = $map['UploadIdMarker'];
        }

        return $model;
    }
}
