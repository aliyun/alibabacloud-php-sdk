<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListPartsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $encodingTypeShrink;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxParts;

    /**
     * @example 100
     *
     * @var int
     */
    public $partNumberMarker;

    /**
     * @example 0004B999EF5A239BB9138C6227D69F95
     *
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'encodingTypeShrink' => 'encoding-type',
        'maxParts'           => 'max-parts',
        'partNumberMarker'   => 'part-number-marker',
        'uploadId'           => 'uploadId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encodingTypeShrink) {
            $res['encoding-type'] = $this->encodingTypeShrink;
        }
        if (null !== $this->maxParts) {
            $res['max-parts'] = $this->maxParts;
        }
        if (null !== $this->partNumberMarker) {
            $res['part-number-marker'] = $this->partNumberMarker;
        }
        if (null !== $this->uploadId) {
            $res['uploadId'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPartsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['encoding-type'])) {
            $model->encodingTypeShrink = $map['encoding-type'];
        }
        if (isset($map['max-parts'])) {
            $model->maxParts = $map['max-parts'];
        }
        if (isset($map['part-number-marker'])) {
            $model->partNumberMarker = $map['part-number-marker'];
        }
        if (isset($map['uploadId'])) {
            $model->uploadId = $map['uploadId'];
        }

        return $model;
    }
}
