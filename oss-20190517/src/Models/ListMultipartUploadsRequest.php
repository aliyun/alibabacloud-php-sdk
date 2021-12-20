<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListMultipartUploadsRequest extends Model
{
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
    public $keyMarker;

    /**
     * @var string
     */
    public $maxUploads;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $uploadIdMarker;
    protected $_name = [
        'delimiter'      => 'delimiter',
        'encodingType'   => 'encoding-type',
        'keyMarker'      => 'key-marker',
        'maxUploads'     => 'max-uploads',
        'prefix'         => 'prefix',
        'uploadIdMarker' => 'upload-id-marker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delimiter) {
            $res['delimiter'] = $this->delimiter;
        }
        if (null !== $this->encodingType) {
            $res['encoding-type'] = $this->encodingType;
        }
        if (null !== $this->keyMarker) {
            $res['key-marker'] = $this->keyMarker;
        }
        if (null !== $this->maxUploads) {
            $res['max-uploads'] = $this->maxUploads;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->uploadIdMarker) {
            $res['upload-id-marker'] = $this->uploadIdMarker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMultipartUploadsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['delimiter'])) {
            $model->delimiter = $map['delimiter'];
        }
        if (isset($map['encoding-type'])) {
            $model->encodingType = $map['encoding-type'];
        }
        if (isset($map['key-marker'])) {
            $model->keyMarker = $map['key-marker'];
        }
        if (isset($map['max-uploads'])) {
            $model->maxUploads = $map['max-uploads'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['upload-id-marker'])) {
            $model->uploadIdMarker = $map['upload-id-marker'];
        }

        return $model;
    }
}
