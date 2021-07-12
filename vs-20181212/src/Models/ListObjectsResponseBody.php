<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\ListObjectsResponseBody\contents;
use AlibabaCloud\Tea\Model;

class ListObjectsResponseBody extends Model
{
    /**
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $maxKeys;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $continuationToken;

    /**
     * @var string
     */
    public $nextContinuationToken;

    /**
     * @var string
     */
    public $encodingType;

    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var string
     */
    public $delimiter;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var int
     */
    public $keyCount;

    /**
     * @var string[]
     */
    public $commonPrefixes;

    /**
     * @var contents[]
     */
    public $contents;
    protected $_name = [
        'marker'                => 'Marker',
        'maxKeys'               => 'MaxKeys',
        'prefix'                => 'Prefix',
        'continuationToken'     => 'ContinuationToken',
        'nextContinuationToken' => 'NextContinuationToken',
        'encodingType'          => 'EncodingType',
        'nextMarker'            => 'NextMarker',
        'delimiter'             => 'Delimiter',
        'requestId'             => 'RequestId',
        'bucketName'            => 'BucketName',
        'isTruncated'           => 'IsTruncated',
        'keyCount'              => 'KeyCount',
        'commonPrefixes'        => 'CommonPrefixes',
        'contents'              => 'Contents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->maxKeys) {
            $res['MaxKeys'] = $this->maxKeys;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->continuationToken) {
            $res['ContinuationToken'] = $this->continuationToken;
        }
        if (null !== $this->nextContinuationToken) {
            $res['NextContinuationToken'] = $this->nextContinuationToken;
        }
        if (null !== $this->encodingType) {
            $res['EncodingType'] = $this->encodingType;
        }
        if (null !== $this->nextMarker) {
            $res['NextMarker'] = $this->nextMarker;
        }
        if (null !== $this->delimiter) {
            $res['Delimiter'] = $this->delimiter;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->keyCount) {
            $res['KeyCount'] = $this->keyCount;
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
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['MaxKeys'])) {
            $model->maxKeys = $map['MaxKeys'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['ContinuationToken'])) {
            $model->continuationToken = $map['ContinuationToken'];
        }
        if (isset($map['NextContinuationToken'])) {
            $model->nextContinuationToken = $map['NextContinuationToken'];
        }
        if (isset($map['EncodingType'])) {
            $model->encodingType = $map['EncodingType'];
        }
        if (isset($map['NextMarker'])) {
            $model->nextMarker = $map['NextMarker'];
        }
        if (isset($map['Delimiter'])) {
            $model->delimiter = $map['Delimiter'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['KeyCount'])) {
            $model->keyCount = $map['KeyCount'];
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

        return $model;
    }
}
