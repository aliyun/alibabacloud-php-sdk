<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListPartsResponseBody extends Model
{
    /**
     * @example examplebucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @example url
     *
     * @var string
     */
    public $key;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxParts;

    /**
     * @example 5
     *
     * @var int
     */
    public $nextPartNumberMarker;

    /**
     * @var Part[]
     */
    public $part;

    /**
     * @example 10
     *
     * @var int
     */
    public $partNumberMarker;

    /**
     * @example 0004B999EF5A239BB9138C6227D69F95
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'bucket'               => 'Bucket',
        'isTruncated'          => 'IsTruncated',
        'key'                  => 'Key',
        'maxParts'             => 'MaxParts',
        'nextPartNumberMarker' => 'NextPartNumberMarker',
        'part'                 => 'Part',
        'partNumberMarker'     => 'PartNumberMarker',
        'uploadId'             => 'UploadId',
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
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->maxParts) {
            $res['MaxParts'] = $this->maxParts;
        }
        if (null !== $this->nextPartNumberMarker) {
            $res['NextPartNumberMarker'] = $this->nextPartNumberMarker;
        }
        if (null !== $this->part) {
            $res['Part'] = [];
            if (null !== $this->part && \is_array($this->part)) {
                $n = 0;
                foreach ($this->part as $item) {
                    $res['Part'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->partNumberMarker) {
            $res['PartNumberMarker'] = $this->partNumberMarker;
        }
        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPartsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['MaxParts'])) {
            $model->maxParts = $map['MaxParts'];
        }
        if (isset($map['NextPartNumberMarker'])) {
            $model->nextPartNumberMarker = $map['NextPartNumberMarker'];
        }
        if (isset($map['Part'])) {
            if (!empty($map['Part'])) {
                $model->part = [];
                $n           = 0;
                foreach ($map['Part'] as $item) {
                    $model->part[$n++] = null !== $item ? Part::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PartNumberMarker'])) {
            $model->partNumberMarker = $map['PartNumberMarker'];
        }
        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }

        return $model;
    }
}
