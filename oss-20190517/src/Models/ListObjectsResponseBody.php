<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListObjectsResponseBody extends Model
{
    /**
     * @description Objects whose names contain the same string that ranges from the prefix to the next occurrence of the delimiter are grouped as a single result element
     *
     * @var CommonPrefix[]
     */
    public $commonPrefixes;

    /**
     * @description The container that stores the returned object metadata
     *
     * @var ObjectSummary[]
     */
    public $contents;

    /**
     * @description The character used to group objects by name
     *
     * @var string
     */
    public $delimiter;

    /**
     * @var string
     */
    public $encodingType;

    /**
     * @description Indicates whether the returned results are truncated
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The name of the object from which the list operation begins
     *
     * @var string
     */
    public $marker;

    /**
     * @description The maximum number of returned objects in the response
     *
     * @var int
     */
    public $maxKeys;

    /**
     * @description The bucket name
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @description The prefix that the names of returned objects contain
     *
     * @var string
     */
    public $prefix;
    protected $_name = [
        'commonPrefixes' => 'CommonPrefixes',
        'contents'       => 'Contents',
        'delimiter'      => 'Delimiter',
        'encodingType'   => 'EncodingType',
        'isTruncated'    => 'IsTruncated',
        'marker'         => 'Marker',
        'maxKeys'        => 'MaxKeys',
        'name'           => 'Name',
        'nextMarker'     => 'NextMarker',
        'prefix'         => 'Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonPrefixes) {
            $res['CommonPrefixes'] = [];
            if (null !== $this->commonPrefixes && \is_array($this->commonPrefixes)) {
                $n = 0;
                foreach ($this->commonPrefixes as $item) {
                    $res['CommonPrefixes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->delimiter) {
            $res['Delimiter'] = $this->delimiter;
        }
        if (null !== $this->encodingType) {
            $res['EncodingType'] = $this->encodingType;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->maxKeys) {
            $res['MaxKeys'] = $this->maxKeys;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextMarker) {
            $res['NextMarker'] = $this->nextMarker;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
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
        if (isset($map['CommonPrefixes'])) {
            if (!empty($map['CommonPrefixes'])) {
                $model->commonPrefixes = [];
                $n                     = 0;
                foreach ($map['CommonPrefixes'] as $item) {
                    $model->commonPrefixes[$n++] = null !== $item ? CommonPrefix::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n               = 0;
                foreach ($map['Contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? ObjectSummary::fromMap($item) : $item;
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
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['MaxKeys'])) {
            $model->maxKeys = $map['MaxKeys'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextMarker'])) {
            $model->nextMarker = $map['NextMarker'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        return $model;
    }
}
