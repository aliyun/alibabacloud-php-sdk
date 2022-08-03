<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListObjectVersionsResponseBody extends Model
{
    /**
     * @var CommonPrefix[]
     */
    public $commonPrefixes;

    /**
     * @var DeleteMarkerEntry[]
     */
    public $deleteMarkers;

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
     * @var string
     */
    public $keyMarker;

    /**
     * @var int
     */
    public $maxKeys;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextKeyMarker;

    /**
     * @var string
     */
    public $nextVersionIdMarker;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var ObjectVersion[]
     */
    public $versions;

    /**
     * @var string
     */
    public $versionIdMarker;
    protected $_name = [
        'commonPrefixes'      => 'CommonPrefixes',
        'deleteMarkers'       => 'DeleteMarker',
        'delimiter'           => 'Delimiter',
        'encodingType'        => 'EncodingType',
        'isTruncated'         => 'IsTruncated',
        'keyMarker'           => 'KeyMarker',
        'maxKeys'             => 'MaxKeys',
        'name'                => 'Name',
        'nextKeyMarker'       => 'NextKeyMarker',
        'nextVersionIdMarker' => 'NextVersionIdMarker',
        'prefix'              => 'Prefix',
        'versions'            => 'Version',
        'versionIdMarker'     => 'VersionIdMarker',
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
        if (null !== $this->deleteMarkers) {
            $res['DeleteMarker'] = [];
            if (null !== $this->deleteMarkers && \is_array($this->deleteMarkers)) {
                $n = 0;
                foreach ($this->deleteMarkers as $item) {
                    $res['DeleteMarker'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->maxKeys) {
            $res['MaxKeys'] = $this->maxKeys;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextKeyMarker) {
            $res['NextKeyMarker'] = $this->nextKeyMarker;
        }
        if (null !== $this->nextVersionIdMarker) {
            $res['NextVersionIdMarker'] = $this->nextVersionIdMarker;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->versions) {
            $res['Version'] = [];
            if (null !== $this->versions && \is_array($this->versions)) {
                $n = 0;
                foreach ($this->versions as $item) {
                    $res['Version'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->versionIdMarker) {
            $res['VersionIdMarker'] = $this->versionIdMarker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListObjectVersionsResponseBody
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
        if (isset($map['DeleteMarker'])) {
            if (!empty($map['DeleteMarker'])) {
                $model->deleteMarkers = [];
                $n                    = 0;
                foreach ($map['DeleteMarker'] as $item) {
                    $model->deleteMarkers[$n++] = null !== $item ? DeleteMarkerEntry::fromMap($item) : $item;
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
        if (isset($map['MaxKeys'])) {
            $model->maxKeys = $map['MaxKeys'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextKeyMarker'])) {
            $model->nextKeyMarker = $map['NextKeyMarker'];
        }
        if (isset($map['NextVersionIdMarker'])) {
            $model->nextVersionIdMarker = $map['NextVersionIdMarker'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['Version'])) {
            if (!empty($map['Version'])) {
                $model->versions = [];
                $n               = 0;
                foreach ($map['Version'] as $item) {
                    $model->versions[$n++] = null !== $item ? ObjectVersion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VersionIdMarker'])) {
            $model->versionIdMarker = $map['VersionIdMarker'];
        }

        return $model;
    }
}
