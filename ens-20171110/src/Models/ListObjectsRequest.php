<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ListObjectsRequest extends Model
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
     * @description The token used in this list operation. If the number of objects exceeds the value of MaxKeys, the NextContinuationToken is included in the response as the token for the next list operation.
     *
     * @example test1.txt
     *
     * @var string
     */
    public $continuationToken;

    /**
     * @description The encoding type of the object names in the response. Only URL encoding is supported.
     *
     * @example url
     *
     * @var string
     */
    public $encodingType;

    /**
     * @description The position from which the list operation starts. The name of the object after which the list operation starts. If this parameter is specified, objects whose names are alphabetically greater than the value of Marker are returned. The Marker parameter is used to list the returned objects by page, and its value must be less than 1,024 bytes in length.
     *
     * Even if the value specified for Marker does not exist in the list during a conditional query, the list starts from the object whose name is alphabetically greater than the value of Marker.
     * @example a
     *
     * @var string
     */
    public $marker;

    /**
     * @description The maximum number of objects to return.
     *
     * Valid values: 0 to 1000. Default value: 100.
     * @example 100
     *
     * @var int
     */
    public $maxKeys;

    /**
     * @description The prefix that must be included in the names of objects you want to list. If you specify a prefix to query objects, the returned object names contain the prefix.
     *
     * The value of the parameter must be less than 1,000 bytes in length.
     * @example b
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The position from which the list operation starts. The name of the object after which the list operation starts. If this parameter is specified, objects whose names are alphabetically greater than the value of StartAfter are returned. The StartAfter parameter is used to list the returned objects by page, and its value must be less than 1,000 bytes in length.
     *
     * Even if the value specified for StartAfter does not exist in the list during a conditional query, the list starts from the object whose name is alphabetically greater than the value of StartAfter.
     * @example b
     *
     * @var string
     */
    public $startAfter;
    protected $_name = [
        'bucketName'        => 'BucketName',
        'continuationToken' => 'ContinuationToken',
        'encodingType'      => 'EncodingType',
        'marker'            => 'Marker',
        'maxKeys'           => 'MaxKeys',
        'prefix'            => 'Prefix',
        'startAfter'        => 'StartAfter',
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

    /**
     * @param array $map
     *
     * @return ListObjectsRequest
     */
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
