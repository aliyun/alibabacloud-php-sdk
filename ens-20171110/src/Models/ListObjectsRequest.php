<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ListObjectsRequest extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $continuationToken;

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
    public $startAfter;
    protected $_name = [
        'bucketName' => 'BucketName',
        'continuationToken' => 'ContinuationToken',
        'encodingType' => 'EncodingType',
        'marker' => 'Marker',
        'maxKeys' => 'MaxKeys',
        'prefix' => 'Prefix',
        'startAfter' => 'StartAfter',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->continuationToken) {
            $res['ContinuationToken'] = $this->continuationToken;
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

        if (null !== $this->startAfter) {
            $res['StartAfter'] = $this->startAfter;
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

        if (isset($map['ContinuationToken'])) {
            $model->continuationToken = $map['ContinuationToken'];
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

        if (isset($map['StartAfter'])) {
            $model->startAfter = $map['StartAfter'];
        }

        return $model;
    }
}
