<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\ListObjectsResponseBody\contents;
use AlibabaCloud\Tea\Model;

class ListObjectsResponseBody extends Model
{
    /**
     * @description The name of the bucket.
     *
     * @example test
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The container for all object names between Prefix and the next occurrence of the string specified by a delimiter. A response can contain CommonPrefixes only if you specify a delimiter.
     *
     * @var string[]
     */
    public $commonPrefixes;

    /**
     * @description The list of object metadata.
     *
     * @var contents[]
     */
    public $contents;

    /**
     * @description The token used in this list operation.
     *
     * @example test1.txt
     *
     * @var string
     */
    public $continuationToken;

    /**
     * @description The character used to group objects by name.
     *
     * @example /
     *
     * @var string
     */
    public $delimiter;

    /**
     * @description The encoding type of the object names in the response.
     *
     * @example N/A
     *
     * @var string
     */
    public $encodingType;

    /**
     * @description Indicates whether the listed objects are truncated. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The number of objects returned for this request.
     *
     * @example 10
     *
     * @var int
     */
    public $keyCount;

    /**
     * @description The position from which the list operation starts.
     *
     * @example ceshi.txt1617853707991
     *
     * @var string
     */
    public $marker;

    /**
     * @description The maximum number of objects returned.
     *
     * @example 10
     *
     * @var int
     */
    public $maxKeys;

    /**
     * @description The token used in the next list operation.
     *
     * @example CgJiYw--
     *
     * @var string
     */
    public $nextContinuationToken;

    /**
     * @description The position from which the next list operation starts.
     *
     * @example ceshi.txt1617853707991
     *
     * @var string
     */
    public $nextMarker;

    /**
     * @description The prefix contained in the names of returned objects.
     *
     * @example b
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The ID of the request.
     *
     * @example 4833C4AC-9396-458C-8F25-1D701334E560
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bucketName'            => 'BucketName',
        'commonPrefixes'        => 'CommonPrefixes',
        'contents'              => 'Contents',
        'continuationToken'     => 'ContinuationToken',
        'delimiter'             => 'Delimiter',
        'encodingType'          => 'EncodingType',
        'isTruncated'           => 'IsTruncated',
        'keyCount'              => 'KeyCount',
        'marker'                => 'Marker',
        'maxKeys'               => 'MaxKeys',
        'nextContinuationToken' => 'NextContinuationToken',
        'nextMarker'            => 'NextMarker',
        'prefix'                => 'Prefix',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->commonPrefixes) {
            $res['CommonPrefixes'] = $this->commonPrefixes;
        }
        if (null !== $this->contents) {
            $res['Contents'] = [];
            if (null !== $this->contents && \is_array($this->contents)) {
                $n = 0;
                foreach ($this->contents as $item) {
                    $res['Contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->continuationToken) {
            $res['ContinuationToken'] = $this->continuationToken;
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
        if (null !== $this->keyCount) {
            $res['KeyCount'] = $this->keyCount;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->maxKeys) {
            $res['MaxKeys'] = $this->maxKeys;
        }
        if (null !== $this->nextContinuationToken) {
            $res['NextContinuationToken'] = $this->nextContinuationToken;
        }
        if (null !== $this->nextMarker) {
            $res['NextMarker'] = $this->nextMarker;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListObjectsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['CommonPrefixes'])) {
            if (!empty($map['CommonPrefixes'])) {
                $model->commonPrefixes = $map['CommonPrefixes'];
            }
        }
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n               = 0;
                foreach ($map['Contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? contents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContinuationToken'])) {
            $model->continuationToken = $map['ContinuationToken'];
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
        if (isset($map['KeyCount'])) {
            $model->keyCount = $map['KeyCount'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['MaxKeys'])) {
            $model->maxKeys = $map['MaxKeys'];
        }
        if (isset($map['NextContinuationToken'])) {
            $model->nextContinuationToken = $map['NextContinuationToken'];
        }
        if (isset($map['NextMarker'])) {
            $model->nextMarker = $map['NextMarker'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
