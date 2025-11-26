<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListObjectsResponseBody\contents;

class ListObjectsResponseBody extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string[]
     */
    public $commonPrefixes;

    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @var string
     */
    public $continuationToken;

    /**
     * @var string
     */
    public $delimiter;

    /**
     * @var string
     */
    public $encodingType;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var int
     */
    public $keyCount;

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
    public $nextContinuationToken;

    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bucketName' => 'BucketName',
        'commonPrefixes' => 'CommonPrefixes',
        'contents' => 'Contents',
        'continuationToken' => 'ContinuationToken',
        'delimiter' => 'Delimiter',
        'encodingType' => 'EncodingType',
        'isTruncated' => 'IsTruncated',
        'keyCount' => 'KeyCount',
        'marker' => 'Marker',
        'maxKeys' => 'MaxKeys',
        'nextContinuationToken' => 'NextContinuationToken',
        'nextMarker' => 'NextMarker',
        'prefix' => 'Prefix',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->commonPrefixes)) {
            Model::validateArray($this->commonPrefixes);
        }
        if (\is_array($this->contents)) {
            Model::validateArray($this->contents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->commonPrefixes) {
            if (\is_array($this->commonPrefixes)) {
                $res['CommonPrefixes'] = [];
                $n1 = 0;
                foreach ($this->commonPrefixes as $item1) {
                    $res['CommonPrefixes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contents) {
            if (\is_array($this->contents)) {
                $res['Contents'] = [];
                $n1 = 0;
                foreach ($this->contents as $item1) {
                    $res['Contents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['CommonPrefixes'])) {
            if (!empty($map['CommonPrefixes'])) {
                $model->commonPrefixes = [];
                $n1 = 0;
                foreach ($map['CommonPrefixes'] as $item1) {
                    $model->commonPrefixes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n1 = 0;
                foreach ($map['Contents'] as $item1) {
                    $model->contents[$n1] = contents::fromMap($item1);
                    ++$n1;
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
