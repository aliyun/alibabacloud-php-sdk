<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ListObjectsRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $delimiter;

    /**
     * @var string
     */
    public $encodingType;

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
    public $startAfter;
    protected $_name = [
        'ownerId'           => 'OwnerId',
        'bucketName'        => 'BucketName',
        'delimiter'         => 'Delimiter',
        'encodingType'      => 'EncodingType',
        'marker'            => 'Marker',
        'maxKeys'           => 'MaxKeys',
        'prefix'            => 'Prefix',
        'continuationToken' => 'ContinuationToken',
        'startAfter'        => 'StartAfter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->delimiter) {
            $res['Delimiter'] = $this->delimiter;
        }
        if (null !== $this->encodingType) {
            $res['EncodingType'] = $this->encodingType;
        }
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
        if (null !== $this->startAfter) {
            $res['StartAfter'] = $this->startAfter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListObjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Delimiter'])) {
            $model->delimiter = $map['Delimiter'];
        }
        if (isset($map['EncodingType'])) {
            $model->encodingType = $map['EncodingType'];
        }
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
        if (isset($map['StartAfter'])) {
            $model->startAfter = $map['StartAfter'];
        }

        return $model;
    }
}
