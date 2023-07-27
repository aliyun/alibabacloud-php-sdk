<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListMultipartUploadsResponseBody extends Model
{
    /**
     * @example examplebucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @var CommonPrefix[]
     */
    public $commonPrefixes;

    /**
     * @example /
     *
     * @var string
     */
    public $delimiter;

    /**
     * @example url
     *
     * @var string
     */
    public $encodingType;

    /**
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @example test1.avi
     *
     * @var string
     */
    public $keyMarker;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxUploads;

    /**
     * @example test100.avi
     *
     * @var string
     */
    public $nextKeyMarker;

    /**
     * @example 0004B99B8E707874FC2D692FA5D7****
     *
     * @var string
     */
    public $nextUploadIdMarker;

    /**
     * @example test
     *
     * @var string
     */
    public $prefix;

    /**
     * @var Upload[]
     */
    public $uploads;

    /**
     * @example 0004B99B8E707874FC2D692FA5D7****
     *
     * @var string
     */
    public $uploadIdMarker;
    protected $_name = [
        'bucket'             => 'Bucket',
        'commonPrefixes'     => 'CommonPrefixes',
        'delimiter'          => 'Delimiter',
        'encodingType'       => 'EncodingType',
        'isTruncated'        => 'IsTruncated',
        'keyMarker'          => 'KeyMarker',
        'maxUploads'         => 'MaxUploads',
        'nextKeyMarker'      => 'NextKeyMarker',
        'nextUploadIdMarker' => 'NextUploadIdMarker',
        'prefix'             => 'Prefix',
        'uploads'            => 'Upload',
        'uploadIdMarker'     => 'UploadIdMarker',
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
        if (null !== $this->commonPrefixes) {
            $res['CommonPrefixes'] = [];
            if (null !== $this->commonPrefixes && \is_array($this->commonPrefixes)) {
                $n = 0;
                foreach ($this->commonPrefixes as $item) {
                    $res['CommonPrefixes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->delimiter) {
            $res['Delimiter'] = $this->delimiter;
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
        if (null !== $this->nextUploadIdMarker) {
            $res['NextUploadIdMarker'] = $this->nextUploadIdMarker;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
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
        if (isset($map['CommonPrefixes'])) {
            if (!empty($map['CommonPrefixes'])) {
                $model->commonPrefixes = [];
                $n                     = 0;
                foreach ($map['CommonPrefixes'] as $item) {
                    $model->commonPrefixes[$n++] = null !== $item ? CommonPrefix::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Delimiter'])) {
            $model->delimiter = $map['Delimiter'];
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
        if (isset($map['NextUploadIdMarker'])) {
            $model->nextUploadIdMarker = $map['NextUploadIdMarker'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
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
