<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListMultipartUploadsRequest extends Model
{
    /**
     * @example /
     *
     * @var string
     */
    public $delimiter;

    /**
     * @var string
     */
    public $encodingType;

    /**
     * @example test1.avi
     *
     * @var string
     */
    public $keyMarker;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxUploads;

    /**
     * @example fun/
     *
     * @var string
     */
    public $prefix;

    /**
     * @example 0004B99B8E707874FC2D692FA5D7****
     *
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
